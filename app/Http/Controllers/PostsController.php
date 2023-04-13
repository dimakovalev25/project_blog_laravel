<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index (){
        $post = Post::find(1);
        dump($post->title);
        dump($post->content);
        dd($post->likes);

    }
}
