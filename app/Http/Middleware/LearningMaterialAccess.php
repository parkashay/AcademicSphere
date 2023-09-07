<?php

namespace App\Http\Middleware;

use App\Models\Learningmaterials;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LearningMaterialAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->verified === 1) {
                return $next($request);
            }
            else{
                return redirect()->back()->with('message', 'Your Email is not Verified');
            }
        } else {
            return redirect('login');
        }
    }
}
