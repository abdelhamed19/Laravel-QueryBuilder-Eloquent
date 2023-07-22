<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::get();
        return view("posts.index",compact('posts'));
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store(Request $request)
    {
        // Save Way to insert data

//        $post= new Post();
//        $post->title=$request->title;
//        $post->body=$request->body;
//        $post->save();
//        return redirect()->route('index.index');


        // Create Way
        Post::create(
            [
                "title"=>$request->title,
                "body"=>$request->body
            ]);
        return redirect()->route('index.index');

        // All way Using Create
//        Post::create([
//            $request->all()
//        ]);

    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $post=Post::findorFail($id);
        //$post=Post::where("id",$id)->first();
        return view('posts.edit',compact("post"));
    }
    public function update(Request $request, $id)
    {
        // Save Way
//        $posts=Post::findorFAIL($id);
//        $posts->title = $request->title;
//        $posts->body= $request->body;
//        $posts->save();
//        return redirect()->route('index.index');

        // Update Way
        $posts=Post::findorFAIL($id);
        $posts->update([
            "title"=>$request->title,
            "body"=>$request->body
        ]);
        return redirect()->route('index.index');
    }
    public function destroy($id)
    {
        // These Way
        //$posts=Post::findorFail($id)->delete();

        // Or these way
        Post::destroy($id);
        return redirect()->route('index.index');

    }
}
