<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewModuleNotification extends Notification
{
    use Queueable;

    protected $module;

    public function __construct($module)
    {
        $this->module = $module;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Un nouveau module a été créé.')
                    ->action('Voir le module', url('/modules/' . $this->module->id))
                    ->line('Merci d\'utiliser notre application!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Un nouveau module a été créé.',
            'module_id' => $this->module->id,
        ];
    }
}
