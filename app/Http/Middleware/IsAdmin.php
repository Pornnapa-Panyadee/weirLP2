<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated and has admin status (status = 1)
        if (auth()->check() && auth()->user()->status == 1) {
            return $next($request);
        }

        // Redirect to home if not admin
        return redirect('/home')->with('error', 'คุณไม่มีสิทธิ์เข้าถึงหน้านี้');
    }
}
