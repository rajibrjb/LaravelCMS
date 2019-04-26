<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::user()->admin)
        {
            Session::flash('info', 'You do not have permission to perfom this aection');
        }
        return $next($request);
    }
}
