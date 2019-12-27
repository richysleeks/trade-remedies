<?php

namespace App\Listeners;

use App\Events\AdminUserCreated as AdminUserCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use App\Notifications\AdminUserCreated as AdminUserCreatedNotification;

class SendUserCreationNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public $queue = 'default';

    public function __construct()
    {
        //
    }

    
    public function handle(AdminUserCreatedEvent $event)
    {
        //Send notification to the new administrator
        $event->user->notify(new AdminUserCreatedNotification($event->user, $event->password));
    }

    public function failed(AdminUserCreatedNotification $event, $exception)
    {

    }
}
