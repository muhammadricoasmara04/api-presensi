<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Override default redirect behavior.
     */
    protected function redirectTo($request)
    {
        logger('Auth middleware triggered for: ' . $request->url());
        if (! $request->expectsJson()) {
            abort(401, 'Unauthorized.');
        }
    }
}
