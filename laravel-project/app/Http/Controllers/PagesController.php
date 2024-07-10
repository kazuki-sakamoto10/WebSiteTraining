<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PagesController extends Controller
{
    // Homeを表示
    public function Home(){
        return view('home');
      }
  
      // Aboutを表示
      public function About(Request $request){
        /* 
         Validation
        // */
        // $request->validate([
        //   'name' => 'required',
        //   'email' => 'required|email|unique:users',
        //   'password' => 'required|confirmed|min:8',
        // ]);
  
        /*
        Database Insert
        */
        // $user = User::create([
        //   'name' => $request->name,
        //   'email' => $request->email,
        //   'password' => Hash::make($request->password),
        // ]);
  
        // $user = new User;
        // $user -> name = $request->input('name');
        // $user -> email = $request->input('email');
        // $user -> password = $request->input('password');
        // $user ->save();
  
        return view('about');
    }      
}
