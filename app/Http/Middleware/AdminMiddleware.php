<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->role == 1){
            return $next($request);
        }
        else if(Auth::user()->role == 0){
            return redirect('/')->with('error', 'You are not authorized');
        }
        else{
            return redirect('/login')->with('error', 'You are not authenticated. Please login first!');
        }
    }
}
