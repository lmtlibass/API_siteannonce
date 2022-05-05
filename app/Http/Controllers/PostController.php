<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $post  = Post::all();
        return response()->json($post);
    }
    public function create(){
        $post = Post::create($request->all());
        return response()->json($post);
    }
    public function show($id){
        $post = Post::find($id);
        return response()->json($post);
    }
    public function update($id){
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json($post);
    }
    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return response()->json('successfully deleted');
    }
}
