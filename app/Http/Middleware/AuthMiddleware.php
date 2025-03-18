<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::user()) {
            // User is not authenticated, redirect to the login page
            return redirect()->route('admin')->with('error', 'Please log in to access this page.');
        }
        if ($request->is('admin')) {
            return redirect('/admin/dashboard')->with('success', 'You are already logged in.');
        }
        // User is authenticated, allow the request to proceed
        return $next($request);
    }
}
