<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateUserPostsCount
{
    public function handle(PostCreated $event)
    {
        $user = $event->post->user;
        $user->posts_count = $user->posts()->count();
        $user->save();
    }
}
