<?php

namespace App\Http\Controllers;
use App\User; /* add after model relationships setup */

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* get the user_id */
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        /* pass the id to the dashboard
           do this after the model relationships are setup */
        return view('dashboard')->with('posts', $user->posts);
    }
}
