<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "<pre>";
        // print_r($request);
        // if ($request->age && $request->age < 18) { 
        //     die('You are not allowed to access this page');
        //     return redirect('no-access');
        // }
        echo "echo from age checked middleware<br>";
        return $next($request);
    }
}
