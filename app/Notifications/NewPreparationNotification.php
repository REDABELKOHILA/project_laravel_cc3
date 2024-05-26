<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPreparationNotification extends Notification
{
    use Queueable;

    protected $preparation;

    public function __construct($preparation)
    {
        $this->preparation = $preparation;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Une nouvelle préparation a été créée.')
                    ->action('Voir la préparation', url('/preparations/' . $this->preparation->id))
                    ->line('Merci d\'utiliser notre application!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Une nouvelle préparation a été créée.',
            'preparation_id' => $this->preparation->id,
        ];
    }
}
