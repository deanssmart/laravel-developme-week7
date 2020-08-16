<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
date_default_timezone_set("Europe/London");

class Home extends Controller
{
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

    // public function logout()
    // {

    // }
}
