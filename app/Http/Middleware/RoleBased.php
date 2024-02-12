<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleBased
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // protected $redirections = [
    //     'admin' => 'custom-dashboard', // Redirect admin users to a different route
    //     'doctor' => 'docDash',
    //     'patient' => 'home',
    // ];

    // public function handle(Request $request, Closure $next): Response
    // {
    //     if (Auth::check()) {
    //         $role = Auth::user()->role;
    //         if (isset($this->redirections[$role])) {
    //             return redirect()->route($this->redirections[$role]);
    //         }
    //     }
    //     return $next($request);
    // }
}
