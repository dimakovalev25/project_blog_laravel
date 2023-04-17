<?php

namespace App\Http\Controllers;

use App\Models\Article;

class AboutController extends Controller
{
    public function index (){
        return view('about');

    }
}
