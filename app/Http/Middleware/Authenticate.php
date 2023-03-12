<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    public $guard;
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (in_array('consumer', $this->guard)) {
                return url('/consumers/sign-in');
            }
            if (in_array('advertiser', $this->guard)) {
                return url('/advertisers/sign-in');
            }
            if (in_array('admin', $this->guard)) {
                return url('/admins/sign-in');
            }
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guard = $guards;
        $this->authenticate($request, $guards);

        return $next($request);
    }
}
