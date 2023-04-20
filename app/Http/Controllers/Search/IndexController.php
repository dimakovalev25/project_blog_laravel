<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;

class IndexController extends BaseController
{

    public function __invoke()
    {

        return view('search.index');
    }


}



