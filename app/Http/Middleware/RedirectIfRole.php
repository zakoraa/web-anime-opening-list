<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        foreach ($roles as $role) {
            if ($user && $user->role === $role) {
                if ($role === 'admin' && $request->path() === '/') {
                    return redirect()->route('user.index');
                } else if ($role === 'user' && strpos($request->path(), 'admin') === 0) {
                    return redirect()->route('home');
                }
            }
        }

        return $next($request);
    }
}
