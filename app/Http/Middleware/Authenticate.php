<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        \Log::info('Authenticate middleware called.');
        if (empty($guards)) {
            $guards = [null]; // Use the default guard if none is specified
        }

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->guest()) {
                if ($request->expectsJson()) {
                    return response()->json(['message' => 'Unauthorized'], 401); // API response
                }

                return redirect()->route('login'); // Web response
            }
        }

        return $next($request);
    }
}
