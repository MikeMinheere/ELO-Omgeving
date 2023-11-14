<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class teacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //check the role of the logged in user to see if it is a teacher or not, if so, redirect to docenDashboard.
        $user = Auth::user();
        if($user->role == 'teacher' || $user->role == 'admin'){
            return $next($request);
        }
        else{
            return redirect('/studentDashboard');
        }
    }
}
