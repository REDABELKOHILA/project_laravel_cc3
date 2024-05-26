<?php

namespace App\Listeners;

use App\Events\PreparationCreated;
use App\Notifications\NewPreparationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendPreparationNotification
{
    /**
     * Handle the event.
     *
     * @param  PreparationCreated  $event
     * @return void
     */
    public function handle(PreparationCreated $event)
    {
        // إرسال الإشعار لجميع المستخدمين
        $users = \App\Models\User::all();
        Notification::send($users, new NewPreparationNotification($event->preparationSequence));
    }
}
