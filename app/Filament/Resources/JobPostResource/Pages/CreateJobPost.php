<?php

namespace App\Filament\Resources\JobPostResource\Pages;

use App\Filament\Resources\JobPostResource;
use App\Services\LinkedInService;
use App\Services\NaukriService;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateJobPost extends CreateRecord
{
    protected static string $resource = JobPostResource::class;

   
    protected function afterCreate(): void
    {
        /** @var \App\Models\JobPost $job */
        $job = $this->record;
        $platforms = $job->platforms ?? [];

        if (!$job->is_active) {
            return;
        }

        // 1. LinkedIn Auto-Post if selected in Filament
        if (in_array('linkedin', $platforms)) {
            $linkedInService = app(LinkedInService::class);
            $success = $linkedInService->postJob($job);

            if ($success) {
                Notification::make()
                    ->title('Job successfully posted on LinkedIn!')
                    ->success()
                    ->send();
            } else {
                Notification::make()
                    ->title('LinkedIn posting failed')
                    ->body('Please check if LinkedIn session/token is valid.')
                    ->warning()
                    ->send();
            }
        }

        // 2. Naukri Auto-Post if selected in Filament
        if (in_array('naukri', $platforms)) {
            $naukriService = app(NaukriService::class);
            $naukriService->postJob($job);
            
            Notification::make()
                ->title('Naukri integration triggered')
                ->info()
                ->send();
        }
        
       
    }
}