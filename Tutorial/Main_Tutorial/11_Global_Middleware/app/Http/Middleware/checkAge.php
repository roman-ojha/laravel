<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
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
        // so if user age is less then 18 then we will not give access to the main page
        error_log("global middleware");
        if ($request->age && $request->age < 18) {
            // then we will redirect to '/noaccess' page
            return redirect('/noaccess');
        }
        // if greater then 18 it will given access to the request page
        return $next($request);
    }
}
