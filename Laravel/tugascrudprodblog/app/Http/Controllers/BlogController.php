<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFormRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index() 
    {
        $blogs = Blog::query()->get();

        return view('blogs.index', compact('blogs'));
    }
    
    public function show($slug) {
        $blog = Blog::findOrfail($slug);
        
        return view('blogs.show', compact('blog'));
    }

    public function create() {
        
        return view('blogs.create');
    }

    public function store(BlogFormRequest $request) {

        // dd($request);

        $request->validated();

        // dd("test");

        if($request->hasFile('thumbnail')) {
            $image_path = 'storage/' . $request->file('thumbnail')->store('images_blog', 'public');
        }
        
        Blog::create([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'author_name' => $request->input('author_name'),
            'body' => $request->input('body'),
            'thumbnail' => $request->file('thumbnail')->getClientOriginalName(),
            'thumbnail_path' => $image_path
        ]);

        return redirect()->back()->with('success', 'Blog created successfully');
    }

    public function update(BlogFormRequest $request, $slug) {

        $request->validated();

        $blog = Blog::findOrFail($slug);
        
        if($request->hasFile('thumbnail')) {
            isset($blog->thumbnail_path) ? unlink(public_path($blog->thumbnail_path)) : false;
            $image_path = 'storage/' . $request->file('thumbnail')->store('images_blog', 'public');
        }

        $blog->update([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'author_name' => $request->input('author_name'),
            'thumbnail' => $request->hasFile('thumbnail') ? $request->file('thumbnail')->getClientOriginalName() : $blog->thumbnail,
            'thumbnail_path' => $request->hasFile('thumbnail') ? $image_path : $blog->thumbnail_path
        ]);
        
        return redirect()->back()->with('success', 'Blog updated successfully');
    }

    public function destroy($slug) {

        $blog = Blog::findOrFail($slug);

        file_exists(public_path($blog->thumbnail_path)) ? unlink(public_path($blog->thumbnail_path)) : false;
        
        $blog->delete();
        

        return redirect()->back()->with('success', 'Blog deleted successfully');
    }

}
