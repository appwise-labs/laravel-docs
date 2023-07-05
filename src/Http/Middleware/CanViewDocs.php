<?php

namespace AppwiseLabs\LaravelDocs\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CanViewDocs
{
    public function handle(Request $request, Closure $next)
    {
        if(app()->environment('local')) {
            return $next($request);
        }

        if(Gate::allows('canViewDocs')) {
            return $next($request);
        }

        return abort(403);
    }
}
