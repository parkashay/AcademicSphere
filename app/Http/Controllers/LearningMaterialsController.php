<?php

namespace App\Http\Controllers;

use App\Models\Learningmaterials;

use Illuminate\Http\Request;

class LearningMaterialsController extends Controller
{
    public function index(){

        // $learningMaterials = Learningmaterials::paginate(10);
        // return view('pages.learning-materials')->with(['learningMaterials' => $learningMaterials]);
        $learningMaterialsGroups = Learningmaterials::distinct()->pluck('course');
        return view('pages.learning-materials')->with(['learningMaterialsGroups' => $learningMaterialsGroups]);

    }
    public function verificationForm(){
        return view('pages.code-verification');
    }


    public function verify(Request $request){
        $validatedCode  = $request->validate([
            'access_code' => 'required|exists:courses,access_code',
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
    public function subjectMaterials(string $slug){
        $learningMaterials = Learningmaterials::where('course', $slug)->paginate(15);
        return view('pages.subject-materials')->with(['title' => $slug,'learningMaterials' => $learningMaterials]);
    }

    public function singleMaterial(string $id)
    {
        $singleMaterial = Learningmaterials::find($id);

        // related notes
        $relatedNotes = Learningmaterials::where('course', '==', $singleMaterial->course)->limit(5)->get();
        return isset($singleMaterial) ?
            view(
                'pages.single-course',

                [
                    'singleMaterial' => $singleMaterial,
                    'relatedNotes' => $relatedNotes
                ]

            )
            : redirect('/learning-materials');
    }



    // Search Learning material

    public function getQuery(Request $req)
    {
        $search = $req['search'] ?? "";
        if ($search != "") {
            $posts = Learningmaterials::where('title', 'LIKE', "%$search%")
                ->orWhere('keywords', 'LIKE', "%$search%")
                ->orWhere('content', 'LIKE', "%$search%")
                ->orWhere('course', 'LIKE', "%$search%")
                ->paginate(15);
        }

        

        return isset($posts) ?
            view('pages.learning-material-search', ['posts' => $posts, 'query' => $search])
            : redirect('/posts');

    }
}
