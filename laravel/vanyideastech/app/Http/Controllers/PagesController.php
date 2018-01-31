<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function index(){
       $title = "Vany Bannits!";
       //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
     }

     public function about(){
      $title = "About Me";
       return view('pages.about')->with('title', $title);
     }

     public function contact(){
       $title = "Contact";
       return view('pages.contact')->with('title', $title);
     }

     public function projects(){
       $title = "Projects";
       return view('pages.projects')->with('title', $title);
     }

     public function services(){
       $data = array(
         'title' => "Services",
         'services' => ['Web deisgn', 'Programming', 'SEO']
       );
       return view('pages.services')->with($data);
     }

    public function adminlogin(){
       $title = "Admin Login";
       return view('pages.adminlogin')->with('title', $title);
     }

    public function poetry(){
       $title = "Poetry";
       return view('pages.poetry')->with('title', $title);
     }

    public function posts(){
       $title = "Posts";
       return view('posts.index')->with('title', $title);
     }

     /* Posts */

     /* Albums */
      public function albums(){
       return view('albums');
     }

   
}
