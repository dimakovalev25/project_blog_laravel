<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {

        //регистрируем мидлваре в http/kernel.php

        if (!auth()->user() || auth()->user()->status!=='admin'){
            return redirect()->route('post.index');
        }

        return $next($request);
    }
}
