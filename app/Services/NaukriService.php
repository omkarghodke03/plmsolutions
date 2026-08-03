<?php

namespace App\Services;

use App\Models\JobPost;
use Illuminate\Support\Facades\Log;

class NaukriService
{
    public function postJob(JobPost $job): bool
    {
        
        Log::info("Naukri posting triggered for Job ID: {$job->id}. Awaiting API configuration.");
        return true;
    }
}