<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{

    public function viewMain(){
        $posts = Post::all();
        return view('posts', compact('posts'));

    }

    public function read() {
//        $post = Post::find(2);
//        dd($post->title);

        $posts = Post::all();
//        dd($posts);

        foreach ($posts as $post) {
//            dump($post->title);
        }

        $post = Post::where('title', 'p')->get();
        foreach ($post as $item) {
//            dump($item->title);
        }

        $post2 = Post::where('title', 'p')->first();
//        dump($post2->content);



    }
    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
//        foreach ($posts as $item) {
//            dump($item->title);
//            dump($item->content);
//        }

        //        dump($post->title);
//        dump($post->content);
//        dd($post->likes);

//        $post = Post::where('is_published', 0)->get();
    }
    public function create_post()
    {
        $posts_arr = [
            [
                'title' => 'for each',
                'content' => 'post create for each',
                'likes' => 90,

            ],
            [
                'title' => 'for each for each',
                'content' => 'post create for each for each',
                'likes' => 80,

            ],

        ];

//        Post::create([
//                'title'=>'create create!!',
//                'content'=>'create create content!!!',
//                'likes'=>700,
//        ]);

        foreach ($posts_arr as $item) {
            Post::create($item);
        }
        dump('create');
    }
    public function update_post()
    {
        $post = Post::all();
//        dump($post->title);

        foreach ($post as $item){
            $item->update([
                'likes' => $item->likes+1,
            ]);
        }

        dd('update');

//        $post->update([
//            'title' => 'updated',
//            'content' => 'post updated',
//            'likes' => +1,
//        ]);

    }
    public function delete_post()
    {
        $post = Post::find(2);
        $post->delete();

        dump('del');
    }
    public function restore()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dump('restore post');
    }
    public function firstOrCreate()
    {
        //достаем запись, если ее нет, то создаем ее

        $post = [
            'title' => 'some post create',
            'content' => 'some post create content',
            'likes' => 30,
        ];

        $post_my =  Post::firstOrCreate([
            'title' => 'post firstOrCreate'
        ],
        [
            'title' => 'post firstOrCreate',
            'content' => 'some post firstOrCreate firstOrCreate',
            'likes' => 30,
        ]);


       dump('end firstorcreate');
    }

    public function updateOrCreate(){
        //
    }



}
