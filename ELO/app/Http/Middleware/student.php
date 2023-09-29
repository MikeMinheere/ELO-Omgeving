<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class user
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        
        if($user->role != 'teacher' || $user->role != 'admin'){
            return $next($request);
        }
        else{
            return abort(403, 'Unauthorized action.');
        }
    }
}
