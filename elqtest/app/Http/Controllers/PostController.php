<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::get();
        return view("index",compact('posts'));
    }

    public function create() //دي علشان تجيبلك الـ view اللي هتشتغل عليه اللي هو create
    {
        return view("create");
    }

    public function store(Request $request)  // دي علشان تبعت الداتا على الداتا بيز يعني هي اللي مسؤوله عن الـ logic
    {
        $obj=new Post();
        $obj->title=$request->title;
        $obj->description=$request->body;
        $obj->save();
        return redirect()->route("index.index");

//        Post::create(
//            [
//                "title"=>$request->title,
//                "description"=>$request->body
//            ]);
//        return redirect()->route('index.index');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit( $id)
    {
        $posts=Post::findorFail($id);
        return view("edit",compact("posts"));
    }
    public function update(Request $request, $id)
    {
        $posts=Post::findorFAIL($id);
        $posts->update([
            "title"=>$request->title,
            "description"=>$request->body
        ]);
        return redirect()->route('index.index');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route("index.index");
    }
}
