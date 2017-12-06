<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Vany Blog";
        return view('pages.index')->with('title',$title);
    }

     public function about(){
         $title = "About Page";
         return view('pages.about')->with('title',$title);
    }

     public function project(){
        $data = array(
            'title'=> 'Projects Page',
            'projects'=> ['Blog', 'Invoicing']
        );
        return view('pages.project')->with($data);
    }

     public function blog(){
         $title = "Blog Page";
         return view('pages.blog')->with('title',$title);
    }

    public function admin(){
         $title = "Admin Page";
         return view('pages.admin')->with('title',$title);
    }
}
