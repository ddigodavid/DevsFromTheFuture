<?php
namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{

    public function diversity($slug)
    {
        $post = Post::where('area', '=', 'diversity')->where('slug', '=', $slug)->first();

//        if (! $post) {
//            return Redirect::route('home);
//        }

        return view('posts.index', compact('post'));
    }

    public function tendencies($slug)
    {
        $post = Post::where('area', '=', 'tendencies')->where('slug', '=', $slug)->first();

        if (! $post) {
            return Redirect::route('home');
        }

        return view('posts.index', compact('post'));
    }

    public function skills($slug)
    {
        $post = Post::where('area', '=', 'skills')->where('slug', '=', $slug)->first();

//        if (! $post) {
//            return Redirect::route('home);
//        }

        return view('posts.index', compact('post'));
    }
}