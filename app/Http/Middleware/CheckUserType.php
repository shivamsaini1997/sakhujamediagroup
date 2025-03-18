<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$types
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$types): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/admin'); // Redirect to admin login if not authenticated
        }

        // Get the authenticated user's type
        $userType = Auth::user()->type;

        // Check if the user's type is in the allowed types
        if (in_array($userType, $types)) {
            // Redirect to dashboard or an error page if the user does not have the right access
            return redirect('/admin/dashboard')->with('error', 'You do not have permission to access this page.');
        }

        return $next($request);
    }
}
