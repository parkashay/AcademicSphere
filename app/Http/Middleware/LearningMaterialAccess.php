<?php

namespace App\Http\Middleware;

use App\Models\Learningmaterials;
use Closure;
use Illuminate\Http\Request;
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
            $learningMaterial = Learningmaterials::find($request->id);
            if ((session('accessCode')) == ($learningMaterial->access_code)) {
                return $next($request);
            }
            else{
                return redirect()->route('verify.code');
            }
        }
        else{
        return redirect()->route('verify.code');      
        }
    }
}
