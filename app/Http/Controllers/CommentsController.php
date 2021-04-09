<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required']);
        // Validator::make(request()->all(), [
            // 'body' => 'required|min:2'
        // ]);
// 
        $post->addComment(request('body'));

        return back();
    }
}
