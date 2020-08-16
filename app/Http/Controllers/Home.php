<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
date_default_timezone_set("Europe/London");

class Home extends Controller
{
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

        if(Auth::check()) {
            $user = Auth::user()->name;
        } else {
            $user = "";
        }

        $message .= " ".$user;

        return view("home", ["welcomeMsg" => $message]);
       
    }

}
