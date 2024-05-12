<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blog=Blog::all();
        return view('admin.blog.blogList',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.blog.addBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $photo=$request->file('photo');
        $name=$photo->getClientOriginalName();
        Blog::create([
            'details'=>$request->details,
            'date'=>$request->date,
            'btn'=>$request->btn,
            'photo'=> $name,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $blog=Blog::findOrFail($id);
        return view('admin.blog.blogEdit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
