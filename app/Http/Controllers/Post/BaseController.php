<?php

namespace App\Http\Controllers\Post;

use App\Services\Post\Services;

class BaseController extends Services
{

    public $service;

    public function __construct(Services $service)
    {
        $this->service = $service;

    }

}
