<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return redirect()->route('blog.index');
    }

    public function user()
    {
        return view('users.user');
    }

    public function editUser($id)
    {
        return "<a href = " . route('home', $id) . ">Home</a>";
    }

    public function userID($id)
    {
        //return "Your ID is: " . $id;
        return "<a href = " . route('editUser', $id) . " >Edit</a>";
    }

    public function userNameID($id, $name)
    {
        return "Your ID is: " . $id . ", and your name is " . $name . ".";
    }

    public function home($id)
    {
        return "Welcome user " . $id . "!";
    }

    public function employee()
    {
        return "<h1>Employee Page</h1>";
    }

    public function fallback()
    {
        //return "Route does not exist.";
        //return redirect()->route('USER');
        Log::error('Error 404');
        return view('404');
    }

    //BOOTSTRAP

    public function dashboard()
    {
        return view('dashboard');
    }

    public function responsive()
    {
        return view('sample.responsive');
    }

    public function student()
    {
        return view('student');
    }

    public function pricing()
    {
        return view('pricing');
    }
}
