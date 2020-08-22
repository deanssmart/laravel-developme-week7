<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Http\Request;

class Treatments extends Controller
{
    public function index()
    {        
        return view("treatments/index", [
            "treatments" => Treatment::all()->sortby("name")
        ]);
    }

    public function show(Treatment $treatment)
    {
        $animals = $treatment->animals()->get();

        return view("treatments/show", [
            "treatment" => $treatment,
            "animals" => $animals->sortBy("name"),
        ]);
    }

    public function destroy(Treatment $treatment)
    {
        $treatment->delete();
        return redirect("/treatments/index");
    }

}
