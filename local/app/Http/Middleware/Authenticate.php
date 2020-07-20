<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
use Closure;
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
    public function handle($request,Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('admin/home');
        }
        $user = Auth::user();
        $router = $request->route()->getName();
        dd($router);
        return $next($request);
    }
}
