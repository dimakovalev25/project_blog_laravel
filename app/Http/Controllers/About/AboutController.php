<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\Article;

class AboutController extends Controller
{
    public function __invoke (){
        return view('about');

    }
}
