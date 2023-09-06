<?php

namespace App\Http\Controllers;

use App\Models\Learningmaterials;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;

class LearningMaterialsController extends Controller
{
    public function index(){
        $accessCodes = session('accessCodes');
        $accessibleMaterials = Learningmaterials::whereIn('access_code', $accessCodes)->get();
        return response($accessibleMaterials);
    }
    public function verificationForm(){
        return view('pages.code-verification');
    }
    public function verify(Request $request){
        $validatedCode  = $request->validate([
            'access-code' => 'required | exists:learningmaterials,access_code',
        ]);
        if($validatedCode){
            session(['accessCodes' => $validatedCode]);
            return redirect()->route('learning.materials');
        }
    }
}
