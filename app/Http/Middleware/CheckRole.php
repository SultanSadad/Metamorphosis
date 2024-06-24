<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!Auth::check()) {
            // User is not logged in
            return redirect('/Login');
        }

        $user = Auth::user();
        if ($user->role !== $role) {
            // User does not have the required role
            return redirect('/')->with('error', 'Unauthorized access');
        }

        return $next($request);
    }
}
