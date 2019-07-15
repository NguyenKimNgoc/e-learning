<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request,$guard = null)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
        if($guard == 'l_customers' && Auth::guard($guard)->check()){
            return route('loginFrontend');
        }
    }
}