<?php

namespace App\Http\Middleware;

use Closure;

class BasicAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if($request->getUser() != 'admin' || $request->getPassword() != '123456') {
            $headers = array('WWW-Authenticate' => 'Basic');
            return response('Admin Login', 401, $headers);
        }
        return $next($request);
    }
}