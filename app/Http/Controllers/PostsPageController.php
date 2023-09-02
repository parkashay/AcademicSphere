<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsPageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->get();
        return view('pages.posts')->with('posts', $posts);
    }

    public function singlePost(string $id)
    {
        $singlePost = Post::find($id);
        return isset($singlePost) ?
            view('pages.single-post',['post' => $singlePost])
            : redirect('/posts');
    }
}
