<?php

namespace App\Filament\Resources\JobPostResource\Pages;

use App\Filament\Resources\JobPostResource;
use App\Services\LinkedInService;
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

        /*
        |--------------------------------------------------------------------------
        | LinkedIn Company Page Publishing
        |--------------------------------------------------------------------------
        */

        if (!in_array('linkedin', $platforms, true)) {
            return;
        }

        $token = session('linkedin_token');

        $organizationId = config(
            'services.linkedin.organization_id'
        );

        if (!$token || !$organizationId) {

            Notification::make()
                ->title('LinkedIn Company Page is not connected')
                ->body(
                    'Please connect your LinkedIn Company Page before publishing this job.'
                )
                ->warning()
                ->actions([
                    \Filament\Notifications\Actions\Action::make('connect')
                        ->label('Connect LinkedIn')
                        ->url(route('linkedin.connect'))
                        ->openUrlInNewTab(),
                ])
                ->send();

            return;
        }

        $linkedInService = app(LinkedInService::class);

        $result = $linkedInService->postJob($job);

        if (!empty($result['success'])) {

            $postId = $result['linkedin_post_id'] ?? null;

            Notification::make()
                ->title('Job successfully posted on LinkedIn Company Page!')
                ->body(
                    $postId
                        ? "LinkedIn Post ID: {$postId}"
                        : 'LinkedIn post was created successfully.'
                )
                ->success()
                ->send();

            return;
        }

        Notification::make()
            ->title('LinkedIn posting failed')
            ->body(
                $result['message']
                    ?? 'LinkedIn API request failed.'
            )
            ->danger()
            ->send();
    }
}
