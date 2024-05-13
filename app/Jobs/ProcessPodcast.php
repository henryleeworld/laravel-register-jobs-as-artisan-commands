<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\ArtisanDispatchable\Jobs\ArtisanDispatchable;

class ProcessPodcast implements ShouldQueue, ArtisanDispatchable
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var int */
    private $podcastId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $podcastId)
    {
        $this->podcastId = $podcastId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo __('Process Podcast :podcast_id', ['podcast_id' => $this->podcastId]) . PHP_EOL;
    }
}
