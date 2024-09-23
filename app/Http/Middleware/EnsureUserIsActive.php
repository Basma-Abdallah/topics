<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsActive
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
        // Check if the user is authenticated and has an active account
        if (Auth::check() && Auth::user()->active != 1) {
            // Log the user out and redirect them with an error message
            Auth::logout();

            // Redirect to login with an error message about activation
            return redirect()->route('login')->withErrors([
                'active' => 'Your account is not yet activated. Please contact website admin.',
            ]);
        }

        return $next($request);
    }


}
