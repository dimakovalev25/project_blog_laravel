<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {


        //нам приходит 'title' и ищет по нему
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->get();
        return view('search.show', compact('posts'));

    }
}



