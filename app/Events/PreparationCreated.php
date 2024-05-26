<?php

namespace App\Events;

use App\Models\PreparationSequence;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PreparationCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $preparationSequence;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PreparationSequence $preparationSequence)
    {
        $this->preparationSequence = $preparationSequence;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
