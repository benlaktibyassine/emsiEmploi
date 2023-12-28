<?php

namespace App\Http\Middleware;

use App\Models\Prof;
use App\Models\Responsable;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('user_id')) {
            $userId = session('user_id');

            // Check if id_prof exists in the responsable table
            $responsable = Responsable::where('id_prof', $userId)->first();

            if ($responsable) {
                session()->put('role', 'admin');
                return $next($request);
            } else {
                session()->put('role', 'user');
                $prof = Prof::where('id_prof', $userId)->first();

                return response()->view("log",compact('prof'));
            }
        }

        // User is not authenticated, redirect to the login page
        return redirect()->route('login');
    }
}
