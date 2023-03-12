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
        if (!$request->expectsJson()) {
            if ($this->auth->guard('consumer')->check()) {
                return url('/consumers/sign-in');
            }
            if ($this->auth->guard('advertiser')->check()) {
                return url('/advertisers/sign-in');
            }
            if ($this->auth->guard('admin')->check()) {
                return url('/admins/sign-in');
            }
        }
    }
}
