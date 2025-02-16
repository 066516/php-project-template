<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Response;

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
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    /**
     * Handle unauthorized access and return JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     */
    protected function unauthenticated($request, array $guards)
    {
        abort(response()->json([
            'message' => 'You are not authorized to access this resource.'
        ], Response::HTTP_UNAUTHORIZED));
    }
}
