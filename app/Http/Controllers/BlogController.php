<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the blogs.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blogs', compact('blogs'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('blog_image')) {
            $data['blog_image'] = $request->file('blog_image')->store('blog_images', 'public');
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('blog_image')) {
            $data['blog_image'] = $request->file('blog_image')->store('blog_images', 'public');
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}


