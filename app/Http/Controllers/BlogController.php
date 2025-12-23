<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index',compact('blogs'));
        
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        // dd($blog);
        $category = category::all();
        $latestPost = Blog::latest()->limit(5)->get();
        $relatedPost = Blog::where('category_id',$blog->category_id)->where('id','!=',$blog->id)->latest()->limit(3)->get();
        // dd($relatedPost);
         return view('blogs.show', compact('blog','category','latestPost','relatedPost'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('blogs.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     // TODO: Persist the blog post (e.g. Post::create(...))

    //     return redirect()->route('blogs.index')->with('success', 'Post created.');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show($id)
    // {
    //     // TODO: Load post by id or slug
    //     return view('blogs.show', ['id' => $id]);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit($id)
    // {
    //     // TODO: Load post
    //     return view('blogs.edit', ['id' => $id]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, $id): RedirectResponse
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     // TODO: Update the post in storage

    //     return redirect()->route('blogs.show', $id)->with('success', 'Post updated.');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy($id): RedirectResponse
    // {
    //     // TODO: Delete the post

    //     return redirect()->route('blogs.index')->with('success', 'Post deleted.');
    // }
}
