<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function inicio()
    {
        $post = Post::get()->random(4);
        return view('inicio', ['post' => $post]);
    }

    public function blogs()
    {
        $posts = Post::latest()->paginate(9);

        return view('blogs', ['posts' => $posts]);
    }

    public function post(Post $post){
        // Comsutlar en la base de datos
     return view('post', ['post' => $post]);
     }

     public function about()
    {
        return view('about');
    }

    public function thanks()
    {
        return view('thanks');
    }

}
