<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Post;
use App\Tag;

class PostController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        // $posts = Post::orderBy('id', 'desc')->get();
        // dd($posts);
        return view('backend.admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->get();
        return view('backend.admin.posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());
        return redirect()->route('admin.post')
                         ->with('info', 'Post creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //$post = Post::find($slug);
        $post = Post::where('slug', $slug)->firstOrFail();
        // dd($post);
        return view('backend.admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        //$post = Post::firstOrFail($slug);
        //  $post = Post::find($slug);
        //dd($post);
        $tags = Tag::orderBy('name', 'ASC')->get();
        return view('backend.admin.posts.edit', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        //dd($post);
        $post->fill($request->all())->save();
        return redirect()->route('admin.post', $post->slug)
                         ->with('info', 'Post creada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        return back()->with('info', 'Post fue eliminada con exito');
    }
}
