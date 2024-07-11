<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PagesController extends Controller
{
      // Aboutを表示
    public function about(){

      return view('about');
      
    }
    
    public function store(Request $request)
    {
      $post = new Post;
      $post -> user_name = $request->input('user_name');
      $post -> title = $request->input('title');
      $post -> content = $request->input('content');
      $post ->save();
      return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
      $post = Post::all();
        return view('contact', [
            'posts' => $post,
        ]);
    }
}
