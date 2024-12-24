<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role)
    {
        if ($request->session()->get('ID_ROLE') != $role) {
            return redirect('/login')->with('msg', 'Your session has expired');
        }

        return $next($request);
    }
}
