<?php

namespace App\Listeners;

use App\Events\ModuleCreated;
use App\Notifications\NewModuleNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendModuleNotification
{
    /**
     * Handle the event.
     *
     * @param  ModuleCreated  $event
     * @return void
     */
    public function handle(ModuleCreated $event)
    {
        // إرسال الإشعار لجميع المستخدمين
        $users = \App\Models\User::all();
        Notification::send($users, new NewModuleNotification($event->module));
    }
}
