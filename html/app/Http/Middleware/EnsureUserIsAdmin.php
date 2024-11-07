<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try{
            if($request->cookies->all()["is_admin"] == null) {
                return $next($request);
            }
        }
        catch (\Exception $e) {
            return redirect('/');
        }
        finally {
            if ((Auth::user() && Auth::user()->is_admin == true)) {
                return $next($request);
            }
        }
    
        return redirect('/');
    }
}
