<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            // return request()->is('admin*') ? route('admin.login') : route('login');
            if(request()->is('administator*'))
            {
                return route('administator.login');
            }
            elseif(request()->is('admin*'))
            {
                return route('admin.login');
            }
            elseif(request()->is('teacher*'))
            {
                return route('teacher.login');
            }
            else
            {
                return route('login');
            }
        }
    }
}
