<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ( Auth::check() && Auth::user()->isAdmin() )
        {
            return $next($request);
        }
 
        return redirect('home');//หากไม่ใช่ Admin ให้ Redirect ไปที่ URL นี้
    }
}
