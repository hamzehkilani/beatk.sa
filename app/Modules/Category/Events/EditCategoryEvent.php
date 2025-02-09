<?php

namespace App\Modules\Category\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EditCategoryEvent  implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }


    public function broadcastOn()
    {
        return new Channel('category');
    }


    public function broadcastAs()
    {
        return 'category-edit';
    }
}
