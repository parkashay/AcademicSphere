<?php

namespace App\Http\Controllers;

use App\Models\Learningmaterials;
use Illuminate\Http\Request;

class LearningMaterialsController extends Controller
{
    public function index(){
        $learningMaterials = Learningmaterials::paginate(10);
        return view('pages.learning-materials-test')->with(['learningMaterials' => $learningMaterials]);
    }
    public function verificationForm(){
        return view('pages.code-verification');
    }

    public function verify(Request $request){
        $validatedCode  = $request->validate([
            'access_code' => 'required |  exists:learningmaterials,access_code',
        ]);
        if($validatedCode){
            session(['accessCode' => $validatedCode['access_code']]);
            return redirect()->route('learning.materials')->with('message', 'Code Verified');
        }
    }
    public function learn(string $id){
        $learningMaterial = Learningmaterials::find($id);
        return response([$learningMaterial]);
    }
}
