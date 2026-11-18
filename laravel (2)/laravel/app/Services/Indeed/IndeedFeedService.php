<?php

namespace App\Services\Indeed;

use App\Models\JobPost;
use Illuminate\Support\Carbon;
use RuntimeException;

class IndeedFeedService
{
    /**
     * Generate the complete Indeed XML feed.
     */
    public function generate(): string
    {
        /*
        |--------------------------------------------------------------------------
        | IMPORTANT
        |--------------------------------------------------------------------------
        |
        | Indeed requires ALL current jobs from the career page.
        |
        | Therefore we do not use:
        |
        | whereJsonContains('platforms', 'indeed')
        |
        | because that would create a partial feed.
        |
        | We include every active job published on the website.
        |
        */

        $jobs = JobPost::query()
            ->where('is_active', true)
            ->whereJsonContains('platforms', 'website')
            ->orderBy('id')
            ->get();

        $xml = new \XMLWriter();

        if (! $xml->openMemory()) {
            throw new RuntimeException(
                'Unable to initialize XMLWriter.'
            );
        }

        $xml->setIndent(true);
        $xml->setIndentString('    ');

        $xml->startDocument(
            '1.0',
            'UTF-8'
        );

        /*
        |--------------------------------------------------------------------------
        | Root
        |--------------------------------------------------------------------------
        */

        $xml->startElement('source');

        /*
        |--------------------------------------------------------------------------
        | Publisher
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'publisher',
            config('indeed.company_name')
        );

        $this->writeCdataElement(
            $xml,
            'publisherurl',
            config('indeed.company_url')
        );

        /*
        |--------------------------------------------------------------------------
        | Jobs
        |--------------------------------------------------------------------------
        */

        foreach ($jobs as $job) {
            $this->writeJob(
                $xml,
                $job
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Close
        |--------------------------------------------------------------------------
        */

        $xml->endElement();

        $xml->endDocument();

        return $xml->outputMemory();
    }

    /**
     * Write a single job.
     */
    private function writeJob(
        \XMLWriter $xml,
        JobPost $job
    ): void {
        $xml->startElement('job');

        /*
        |--------------------------------------------------------------------------
        | TITLE
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'title',
            $this->cleanText($job->title)
        );

        /*
        |--------------------------------------------------------------------------
        | DATE
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'date',
            $this->getPublishedDate($job)
        );

        /*
        |--------------------------------------------------------------------------
        | REFERENCE NUMBER
        |--------------------------------------------------------------------------
        |
        | Must remain stable.
        |
        */

        $this->writeCdataElement(
            $xml,
            'referencenumber',
            'JOB-' . $job->id
        );

        /*
        |--------------------------------------------------------------------------
        | REQUISITION ID
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'requisitionid',
            (string) $job->id
        );

        /*
        |--------------------------------------------------------------------------
        | PUBLIC JOB URL
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'url',
            $this->getJobUrl($job)
        );

        /*
        |--------------------------------------------------------------------------
        | COMPANY
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'company',
            config('indeed.company_name')
        );

        /*
        |--------------------------------------------------------------------------
        | SOURCE NAME
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'sourcename',
            config('indeed.company_name')
        );

        /*
        |--------------------------------------------------------------------------
        | LOCATION
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'city',
            config('indeed.default_city')
        );

        $this->writeCdataElement(
            $xml,
            'state',
            config('indeed.default_state')
        );

        $this->writeCdataElement(
            $xml,
            'country',
            config('indeed.default_country')
        );

        /*
        |--------------------------------------------------------------------------
        | POSTAL CODE
        |--------------------------------------------------------------------------
        */

        $postalCode = config(
            'indeed.default_postal_code'
        );

        $this->writeCdataElement(
            $xml,
            'postalcode',
            $postalCode
        );

        /*
        |--------------------------------------------------------------------------
        | EMAIL
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'email',
            config('indeed.contact_email')
        );

        /*
        |--------------------------------------------------------------------------
        | DESCRIPTION
        |--------------------------------------------------------------------------
        */

        $description = $this->prepareDescription(
            $job->description
        );

        $this->writeCdataElement(
            $xml,
            'description',
            $description
        );

        /*
        |--------------------------------------------------------------------------
        | CATEGORY
        |--------------------------------------------------------------------------
        */

        $this->writeCdataElement(
            $xml,
            'category',
            'Information Technology'
        );

        /*
        |--------------------------------------------------------------------------
        | END JOB
        |--------------------------------------------------------------------------
        */

        $xml->endElement();
    }

    /**
     * Build public job detail URL.
     */
    private function getJobUrl(
        JobPost $job
    ): string {
        $baseUrl = rtrim(
            config('indeed.company_url'),
            '/'
        );

        $prefix = '/' . trim(
            config('indeed.job_url_prefix'),
            '/'
        );

        return $baseUrl
            . $prefix
            . '/'
            . rawurlencode($job->slug)
            . '?source=Indeed';
    }

    /**
     * Get published date.
     */
    private function getPublishedDate(
        JobPost $job
    ): string {
        return Carbon::parse(
            $job->created_at
        )
            ->utc()
            ->format('Y-m-d\TH:i:s\Z');
    }

    /**
     * Prepare job description.
     */
    private function prepareDescription(
        ?string $description
    ): string {
        if (! $description) {
            return '';
        }

        /*
        |--------------------------------------------------------------------------
        | Allowed Indeed HTML tags
        |--------------------------------------------------------------------------
        */

        $allowedTags = [
            '<p>',
            '</p>',

            '<br>',
            '<br/>',
            '<br />',

            '<strong>',
            '</strong>',

            '<b>',
            '</b>',

            '<em>',
            '</em>',

            '<h1>',
            '</h1>',

            '<h2>',
            '</h2>',

            '<h3>',
            '</h3>',

            '<h4>',
            '</h4>',

            '<h5>',
            '</h5>',

            '<h6>',
            '</h6>',

            '<ul>',
            '</ul>',

            '<ol>',
            '</ol>',

            '<li>',
            '</li>',

            '<table>',
            '</table>',

            '<thead>',
            '</thead>',

            '<tbody>',
            '</tbody>',

            '<tr>',
            '</tr>',

            '<th>',
            '</th>',

            '<td>',
            '</td>',

            '<div>',
            '</div>',
        ];

        $description = strip_tags(
            $description,
            implode('', $allowedTags)
        );

        /*
        |--------------------------------------------------------------------------
        | Remove invalid XML control characters
        |--------------------------------------------------------------------------
        */

        $description = preg_replace(
            '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u',
            '',
            $description
        );

        return trim($description);
    }

    /**
     * Write CDATA XML element.
     */
    private function writeCdataElement(
        \XMLWriter $xml,
        string $name,
        ?string $value
    ): void {
        $xml->startElement($name);

        $value = (string) ($value ?? '');

        /*
        |--------------------------------------------------------------------------
        | CDATA cannot contain ]]> directly.
        |--------------------------------------------------------------------------
        */

        $value = str_replace(
            ']]>',
            ']]]]><![CDATA[>',
            $value
        );

        $xml->writeCData($value);

        $xml->endElement();
    }

    /**
     * Clean plain text values.
     */
    private function cleanText(
        ?string $value
    ): string {
        return trim(
            preg_replace(
                '/\s+/u',
                ' ',
                strip_tags(
                    (string) $value
                )
            )
        );
    }
}