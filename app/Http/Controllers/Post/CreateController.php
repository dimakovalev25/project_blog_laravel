<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class CreateController extends BaseController
{

    public function __invoke()
    {
        $categories = Category::all();

        //use services/post/services
        $this->service->servicesTest();

        return view('post.create', compact('categories'));
    }


}



