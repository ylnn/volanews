<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\ContentCreated as ContentCreatedEvent;
use Illuminate\Support\Facades\Log;
use App\MainContent;

class ContentCreated
{
    public $event;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(ContentCreatedEvent $event)
    {
        $this->event = $event;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // app('log')->info('ContentCreated');
        if($event->content->add_to_main_contents == 1){
            $mc = new MainContent();
            $mc->content_id = $event->content->id;
            $mc->order = $event->content->add_to_main_contents_order;
            $mc->save();
            Log::info('content added to main contents table');
        }
    }
}
