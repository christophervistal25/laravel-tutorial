<?php
namespace App\Services;

use App\Models\Post;
use Illuminate\Foundation\Auth\User;

class PostService
{
    public function __construct(private Post $post)
    {}

    public function store(array $data) :Post
    {
        $userID = 1;

        $post = $this->post->create([
            'title' => $data['title'],
            'body' => $data['body'],
            'user_id' => $userID,
        ]);
        

        return $post;
    }
}