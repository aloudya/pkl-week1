<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');

        /*
        == Save method: create an instance of model and set attributes before saving. ==
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save(); */
    }

    /**
     * Display the specified resource.
     * ==== IMPLICIT BINDING, resolves models based on the route parameter.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        $post = Post::findOrFail($id);
        if ($post) {
            // Update the post with validated data
            $post->update($data);
            return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
        } else {
            return redirect()->route('posts.index')->with('error', 'Post not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}
