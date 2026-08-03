<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminJobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $resumeContent;
    public $resumeName;
    public $resumeMimeType;

    public function __construct($data, $resumeContent, $resumeName, $resumeMimeType)
    {
        $this->data           = $data;
        $this->resumeContent  = $resumeContent;
        $this->resumeName     = $resumeName;
        $this->resumeMimeType = $resumeMimeType;
    }

    public function build()
    {
        return $this->subject('New Job Application - ' . $this->data['job_title'])
            ->view('emails.career.admin')
            ->with(['data' => $this->data])
            ->attachData($this->resumeContent, $this->resumeName, [
                'mime' => $this->resumeMimeType,
            ]);
    }
}