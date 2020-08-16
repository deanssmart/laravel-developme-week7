<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $now =  date("H");

        if($now < "12"){
            $message = "Good Morning";
        } else if ($now >= "12" && $now < "18"){
            $message = "Good Afternoon";
        } else {
            $message = "Good Evening";
        }

        return view("home", ["welcomeMsg" => $message]);
       
    }
}
