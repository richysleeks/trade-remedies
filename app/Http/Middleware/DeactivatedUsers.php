<?php

namespace App\Http\Middleware;

use Closure;

class DeactivatedUsers
{
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->isActive()) {
            return redirect(route('deactivated'));
        }
        
        return $next($request);
    }
}