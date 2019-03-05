<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use App\Http\Requests\CategoryStoreRequest;
// use App\Http\Requests\CategoryUpdateRequest;

use App\Tag;

class TagController extends Controller
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
        $tags = Tag::orderBy('id', 'desc')->get();
        // dd($tags);
        return view('backend.admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = Tag::create($request->all());
        return redirect()->route('admin.tag')
                         ->with('info', 'Etiqueta creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //$tag = Tag::find($slug);
        $tag = Tag::where('slug', $slug)->firstOrFail();
        // dd($tag);
        return view('backend.admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        //$tag = Tag::firstOrFail($slug);
        //  $tag = Tag::find($slug);
        //dd($tag);
        return view('backend.admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        //dd($tag);
        $tag->fill($request->all())->save();
        return redirect()->route('admin.tag', $tag->slug)
                         ->with('info', 'Etiqueta creada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id)->delete();
        return back()->with('info', 'Etiqueta fue eliminada con exito');
    }
}
