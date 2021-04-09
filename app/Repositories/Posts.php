<?php

namespace App\Repositories;

use App\Models\Post;

class Posts
{
    public function all()
    {
        return Post::all();
    }

    public function filterPost()
    {
        return Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
    }
}
