<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {  
        if(Auth::check())
        {
        if(Auth::user()->role_as == '1') //admin=1   user=0
        {
            return $next($request);
        }
        else if(Auth::user()->role_as == '2')
        {
            return redirect ('manager/dashboard');
        }
       else
        {
          return redirect ('emp/dashboard');
        }
        }
         else
        {
            return redirect ('/login')->with('status','please first login');
        }
        
    }
}
