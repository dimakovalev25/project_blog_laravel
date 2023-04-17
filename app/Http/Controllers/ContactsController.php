<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ContactsController extends Controller
{
    public function index (){

        return view('contacts');
    }
}
