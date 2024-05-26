<?php

namespace App\Events;

use App\Models\Module;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ModuleCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $module;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Module $module)
    {
        $this->module = $module;
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
