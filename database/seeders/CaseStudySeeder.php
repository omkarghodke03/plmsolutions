<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $studies = [
            [
                'title'             => 'Highway Cable-Stay Bridge — Steel Detailing',
                'slug'              => 'highway-cable-stay-bridge-steel-detailing',
                'category'          => 'Structural Services',
                'industry_tag'      => 'Transportation',
                'cover_image'       => 'case-study-one.png',
                'short_description' => '100% first-submission fabricator approval on shop drawings for a 420 m cable-stay bridge, delivered in 6 weeks.',
                'client'            => 'State Transport Authority',
                'location'          => 'Mumbai, India',
                'service'           => 'Structural Services',
                'industry'          => 'Transportation',
                'timeline'          => '6 months',
                'team_size'         => '8 engineers',
                'project_overview'  => 'A major highway infrastructure project requiring precise steel detailing for a 420m cable-stay bridge.',
                'challenge_heading' => 'What made this project complex',
                'challenge_body'    => 'Complex geometry combined with tight fabrication deadlines and multiple contractor interfaces.',
                'challenge_points'  => ['420m main span with asymmetric pylon geometry', 'Over 2,800 unique connection details', '6-week deadline for first fabrication package'],
                'solution'          => 'Deployed a dedicated team of 8 structural engineers using Tekla Structures with custom macros.',
                'results'           => '100% first-submission approval with zero RFIs from the fabricator.',
                'meta_title'        => 'Highway Cable-Stay Bridge Steel Detailing | Milestone PLM',
                'meta_description'  => 'How Milestone PLM achieved 100% first-submission approval on a 420m cable-stay bridge.',
                'schema_type'       => 'Article',
                'sitemap_include'   => true,
            ],
            [
                'title'             => 'Data Centre MEP Coordination — Fast-Track',
                'slug'              => 'data-centre-mep-coordination-fast-track',
                'category'          => 'MEP Services',
                'industry_tag'      => 'Data Centres',
                'cover_image'       => 'case-study-one.png',
                'short_description' => 'Scaled from 4 to 22 engineers in under two weeks for a 48 MW hyperscale facility — zero delays.',
                'client'            => 'Global Hyperscale Operator',
                'location'          => 'Frankfurt, Germany',
                'service'           => 'MEP Services',
                'industry'          => 'Data Centres',
                'timeline'          => '4 months',
                'team_size'         => '22 engineers',
                'project_overview'  => 'Fast-track MEP coordination for a 48 MW hyperscale data centre facility.',
                'challenge_heading' => 'What made this project complex',
                'challenge_body'    => 'Extremely compressed schedule with multiple MEP systems requiring simultaneous coordination.',
                'challenge_points'  => ['48 MW critical power infrastructure', 'Fast-track programme with no float', '14,000+ clash detections resolved'],
                'solution'          => 'Rapid team scale-up from 4 to 22 engineers using federated BIM coordination.',
                'results'           => 'Zero programme delays, 94% clash reduction before site commencement.',
                'meta_title'        => 'Data Centre MEP Coordination Fast-Track | Milestone PLM',
                'meta_description'  => 'Milestone PLM scaled to 22 engineers delivering MEP coordination for a 48MW hyperscale data centre.',
                'schema_type'       => 'Article',
                'sitemap_include'   => true,
            ],
            [
                'title'             => 'City Tower — Full Permit-Stage CD Package',
                'slug'              => 'city-tower-full-permit-stage-cd-package',
                'category'          => 'Architectural Services',
                'industry_tag'      => 'Commercial',
                'cover_image'       => 'case-study-one.png',
                'short_description' => 'Zero AHJ resubmissions on a full permit-stage CD package for a 38-storey Grade-A office tower.',
                'client'            => 'Commercial Developer',
                'location'          => 'Dubai, UAE',
                'service'           => 'Architectural Services',
                'industry'          => 'Commercial',
                'timeline'          => '8 months',
                'team_size'         => '12 engineers',
                'project_overview'  => 'Complete permit-stage construction documentation for a 38-storey Grade-A office tower.',
                'challenge_heading' => 'What made this project complex',
                'challenge_body'    => 'Strict AHJ requirements combined with complex facade geometry and tight submission deadlines.',
                'challenge_points'  => ['38-storey mixed-use tower with complex facade', 'Multi-authority permit submission', 'Zero tolerance for resubmissions'],
                'solution'          => 'Coordinated architectural and structural BIM models with integrated permit-ready documentation.',
                'results'           => 'Zero AHJ resubmissions, permit granted on first submission.',
                'meta_title'        => 'City Tower Permit Stage CD Package | Milestone PLM',
                'meta_description'  => 'Zero AHJ resubmissions on a 38-storey Grade-A office tower permit package by Milestone PLM.',
                'schema_type'       => 'Article',
                'sitemap_include'   => true,
            ],
            [
                'title'             => 'Hospital Campus — LOD 400 As-Built BIM',
                'slug'              => 'hospital-campus-lod-400-as-built-bim',
                'category'          => 'BIM Services',
                'industry_tag'      => 'Healthcare',
                'cover_image'       => 'case-study-one.png',
                'short_description' => 'LOD 400 as-built model across a 12-building healthcare campus, structured for COBie FM handover.',
                'client'            => 'Regional Health Authority',
                'location'          => 'London, United Kingdom',
                'service'           => 'BIM Services',
                'industry'          => 'Healthcare',
                'timeline'          => '9 months',
                'team_size'         => '14 engineers',
                'project_overview'  => 'A regional health authority required a retroactive as-built BIM programme across a 12-building hospital campus ahead of a major facilities management system migration. With existing paper and CAD records spanning 40 years of phased construction, the challenge was to produce a single authoritative LOD 400 BIM environment that could serve as the digital backbone for the authority\'s CAFM platform.',
                'challenge_heading' => 'What made this project complex',
                'challenge_body'    => 'The hospital campus had grown incrementally over four decades. Existing documentation ranged from original hand-drawn record drawings to partially-updated AutoCAD files — none of which reflected the as-built state accurately. The FM system migration had a hard go-live date, creating an immovable deadline for model delivery.',
                'challenge_points'  => [
                '12 buildings spanning 40 years of phased and un-documented construction',
                'Existing documentation accuracy estimated at 35-60% for any given building',
                'COBie data required for 14,000+ maintainable assets across the campus',
            ],
                'solution'          => 'Milestone PLM deployed a dedicated BIM team with structured survey-to-model workflows. Each building was surveyed using point cloud scanning, with models built in Revit to LOD 400. COBie data was captured directly in the model and validated against the client\'s asset register.',
                'results'           => 'All 12 buildings delivered to LOD 400 within the 9-month programme. COBie data validated for 14,000+ assets. Zero resubmissions required by the FM system integrator.',

                'meta_title'        => 'Hospital Campus LOD 400 As-Built BIM | Milestone PLM',
                'meta_description'  => 'LOD 400 as-built BIM across a 12-building hospital campus with full COBie FM handover by Milestone PLM Solutions.',
                'meta_keywords'     => 'LOD 400, as-built BIM, hospital BIM, COBie, healthcare BIM, facilities management',
                'og_title'          => 'Hospital Campus — LOD 400 As-Built BIM | Milestone PLM',
                'og_description'    => 'How Milestone PLM delivered LOD 400 as-built models across a 12-building healthcare campus for FM handover.',
                'og_image'          => 'hospital-campus.png',
                'image_alt'         => 'Hospital Campus LOD 400 As-Built BIM Model',
                'image_title'       => 'Hospital Campus BIM — Milestone PLM',
                'schema_type'       => 'Article',
                'sitemap_include'   => true,
                'robots_index'      => true,
                 'robots_follow'     => true,
            ]
        ];

        foreach ($studies as $study) {
            CaseStudy::updateOrCreate(['slug' => $study['slug']], $study);
        }
    }
}