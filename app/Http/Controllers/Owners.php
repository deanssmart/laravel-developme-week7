<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class Owners extends Controller
{
    public function index()
    {        
        return view("owners/index", [
            "owners" => Owner::all()
        ]);
    }

    public function show(Owner $owner)
    {
        return view("owners/show", [
            "owner" => $owner
        ]);
    }

    public function create()
    {
        return view("owners/form");
    }

    public function createPost(Request $request)
    {
        // get all of the submitted data
        $data = $request->all();
        // create a new owner, passing in the submitted data
        $owner = Owner::create($data);
        // redirect the browser to the new Owner
        return redirect("/owners/{$owner->id}");        
    }
}
