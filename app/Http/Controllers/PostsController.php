<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
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

    public function create_post()
    {
        $posts_arr = [
            [
                'title'=>'post create',
                'content'=>'post create content',
                'likes'=>90,

            ],
            [
                'title'=>'post create2',
                'content'=>'post create create',
                'likes'=>80,

            ],

        ];

//        Post::create([
//                'title'=>'post create!!',
//                'content'=>'post create content!!!',
//                'likes'=>0,
//        ]);

        foreach ($posts_arr as $item) {
            Post::create($item);
        }



        dump('create');
    }


}
