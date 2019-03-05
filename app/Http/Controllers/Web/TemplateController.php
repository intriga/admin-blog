<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use App\Post;
use App\Tag;

class TemplateController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3);
        //dd($posts);
        return view('frontend.sections.posts', compact('posts'));        
    }
    
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        //dd($post);
        return view('frontend.sections.post', compact('post'));        
    }


}
