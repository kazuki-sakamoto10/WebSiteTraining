<?php

namespace App\Http\Controllers;

use App\Models\Post as ModelsPost;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Post;

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

}
