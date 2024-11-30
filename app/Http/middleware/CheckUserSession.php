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
        if (!$request->session()->exists('user')) {
            return redirect('')->with('resp_msg', 'Your session has been expired');
        } else {
            if (in_array(session('user')[0]['ROLE'], $role)) {
                return $next($request);
            } else {
                return redirect('');
            }
        }
    }
}
