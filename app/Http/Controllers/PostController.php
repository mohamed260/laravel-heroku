<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Post;
use Image;

class PostController extends Controller
{
    public function store(Request $request){
        $post = new Post();

        $post->name = $request->input('name');
        $post->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
 
            $post->image = $filename;
         }
 
         $post->save();

        return back();
    }

    public function show(){
        $posts = Post::all();

        return view('show', compact('posts'));
    }
}
