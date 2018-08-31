<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    function getOne($id){
        $blog = Blog::findorfail($id);
        return view('blog.single')->with('blog',$blog);
    }

    public function create(Request $request){
        $blog = new Blog;

        $cover = $request->file('coverimg');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $blog->title = $request->input("title");
        $blog->body = $request->input('body');
        $blog->type = $request->input('type');

        $blog->mime = $cover->getClientMimeType();
        $blog->original_filename = $cover->getClientOriginalName();
        $blog->filename = $cover->getFilename().'.'.$extension;

        $blog->user_id = Auth::user()->id;

        $blog->save();

        return redirect()->route('blog.list');


    }

    public function getList(){
        $blogs = Blog::all();

        return view('blog')->with('blogs',$blogs);
    }

    public function toUpdate($id){
        $blog = Blog::findorfail($id);

        return view('blog.update')->with('blog',$blog);
    }

    public function update(Request $request,$id){
        Blog::where('id',$id)->update($request->except(['_token','_method']));
        return redirect()->route('blog.list');
    }

    public function destroy($id){
        $blog = Blog::findorfail($id);
        $blog->delete();
        return redirect()->back();
    }
}
