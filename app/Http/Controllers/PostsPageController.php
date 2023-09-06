<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
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

        // related posts
        $relatedPosts = Post::where('id', '!=', $id)->limit(9)->get();
        return isset($singlePost) ?
            view(
                'pages.single-post',

                [
                    'post' => $singlePost,
                    'relatedPosts' => $relatedPosts
                ]

            )
            : redirect('/posts');
    }




    // All Posts
    public function getPosts()
    {
        $allPosts = Post::paginate(20);

        return isset($allPosts) ?
            view('pages.all-posts', ['posts' => $allPosts])
            : redirect('/posts');
    }

    // Search results
    public function getQuery(Request $req)
    {
        $search = $req['search'] ?? "";
        if ($search != "") {
            $posts = Post::where('title', 'LIKE', "%$search%")
                ->orWhere('keywords', 'LIKE', "%$search%")
                ->orWhere('content', 'LIKE', "%$search%")
                ->orWhere('created_at', 'LIKE', "%$search%")
                ->orWhere('category', 'LIKE', "%$search%")
                ->orWhere('thumbnail', 'LIKE', "%$search%")
                ->paginate(15);
        }




        

        return isset($posts) ?
            view('pages.search', ['posts' => $posts, 'query' => $search])
            : redirect('/posts');
    }
}
