<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->get();

        return view('posts.index', compact('posts'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'references' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->user_id = Auth::user()->id;
        $post->references = $request->references;
        $post->published_at = $request->published_at;
        $post->save();
    
        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $image)
            {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('public/images', $name);
    
                $postImage = new PostImage();
                $postImage->post_id = $post->id;
                $postImage->path = $name;
                $postImage->save();
            }
        }
    
        return redirect()->route('home')
                         ->with('success','Post created successfully.');
    }

    public function show($id){
    $post = Post::with('images')->findOrFail($id);
    return view('posts.show', compact('post'));
    }

}
