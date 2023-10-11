<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image_url = $request->image_url;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = Storage::putFile('public/images', $request->file('image'));
            $nuevo_path = str_replace('public', 'storage', $path); // Cambio aquí
            $post->image_url = $nuevo_path;
        }
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('showAll', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        if($request->hasFile('image')){
            $path = Storage::putFile('public/images', $request->file('image'));
            $nuevo_path = str_replace('public', 'storage', $path); // Cambio aquí
            $post->image_url = $nuevo_path;
        }else{
            //$post->image_url; //caso contrario no s hace nada, ya que en el recorrido estara la iamgen actual :v 
        }
        $post->save();
        return redirect()->route('posts.index');
    }

    public function updateForm($id)
    {
        $post = Post::find($id);
        return view('posts.update',compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $id)
    {   
        $id->delete();
        return redirect()->route('posts.index');
    }
}
