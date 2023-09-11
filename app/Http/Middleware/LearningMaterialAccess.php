<?php

namespace App\Http\Middleware;

use App\Models\Course;
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
        if (session()->has('accessCode')) {
            $subjectCode = Course::where('title', $request->slug)->pluck('access_code')->first();
            if ($subjectCode == session('accessCode')) {
                return $next($request);
            } else {
                return redirect()->back()->with('message', 'Insert Valid Code !!');
            }
        } else {
            return redirect()->back()->with('message', 'Enter Valid Code!!');
        }
    }
}
