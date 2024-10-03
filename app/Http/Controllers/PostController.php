<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //Show All Posts That belong to the currently logged in User.
    public function index(){
        // Fetch only the posts belonging to the authenticated user and paginate
        $posts = Post::where('user_id', Auth::id())->latest()->paginate(5); // 5 posts per page
        return view('posts.index', compact('posts'));
    }

    //Show Single Post
    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }


    //Create Request Post
    public function create(){
        return view('posts.create');
    }

    //Store Request Post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'information' => 'required|string',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'information' => $request->information
        ]);

        return to_route('posts.index')->with('message', 'Your Request has been created successfully!');
    }

    //Allow User to Edit their Request.
    public function edit($id)
    {
        // Find the post by ID and ensure it belongs to the authenticated user
        $post = Post::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'information' => 'required|string',
        ]);

        // Find the post and ensure it belongs to the authenticated user
        $post = Post::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // Update the post
        $post->update([
            'title' => $request->title,
            'information' => $request->information,
        ]);

        return to_route('posts.index')->with('message', 'Your Request has been successfully updated!');
    }

    //Allow User to Delete their Request.
    public function destroy($id)
    {
        // Find the post and ensure it belongs to the authenticated user
        $post = Post::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // Delete the post
        $post->delete();

        return to_route('posts.index')->with('delete', 'Request deleted successfully.');
    }
}
