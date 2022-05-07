<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $url = explode("/", $request->path());
        if (! $request->expectsJson()) {
            if($url[0] == 'admin'){
                return route('loginadm');
            } else {
                return route('login');
            }
        }
    }
}
