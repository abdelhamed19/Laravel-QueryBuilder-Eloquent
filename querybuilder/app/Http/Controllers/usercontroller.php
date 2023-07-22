<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    public function index()
    {
        $posts=DB::table('posts')->get();
        return view('index',compact('posts'));
    }
    public function create()
    {
        return view('CreatePosts');
    }
    public function insert(Request $request)
    {
        DB::table('posts')->insert([
            "title"=>$request->title,
            "description"=>$request->body
        ]);
        return redirect()->route("index");
    }
    public function edit($id)
    {
       $posts = DB::table('posts')->where("id",$id)->first();
        return view('edit',compact('posts',"id"));
    }
    public function update(Request $request,$id)
    {
         $posts = DB::table('posts')->where("id",$id)->update([
             'title'=>$request->title,
             'description'=>$request->body
         ]);
         return redirect()->route("index");
    }
    public function delete($id)
    {

    }

}
