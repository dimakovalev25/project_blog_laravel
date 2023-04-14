<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index (){
        $posts = Post::all();

        foreach ($posts as $item) {
            dump($item->title);
            dump($item->content);
        }

//        dump($post->title);
//        dump($post->content);
//        dd($post->likes);

//        $post = Post::where('is_published', 0)->get();

    }
}
