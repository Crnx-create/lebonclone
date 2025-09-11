<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Show the welcome page with all posts
     */
    public function index()
    {
        // Fetch latest posts (newest first)
        $posts = Post::latest()->get();

        // Pass posts to the welcome view
        return view('welcome', compact('posts'));
    }

    /**
     * Store a new post in the database
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Save the post
        $post = new Post();
        $post->content = $request->content;
        $post->save();

        // Redirect back to welcome page with success message
        return redirect()->route('welcome')->with('success', 'Post created successfully!');
    }
}
