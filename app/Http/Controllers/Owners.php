<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Http\Requests\OwnerRequest;

class Owners extends Controller
{
    public function index()
    {        
        return view("owners/index", [
            "owners" => Owner::all()->sortByDesc("updated_at")
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
        return view("owners/create");
    }

    public function createPost(OwnerRequest $request)
    {
        // get all of the submitted data
        $data = $request->all();
        // create a new owner, passing in the submitted data
        $owner = Owner::create($data);
        // redirect the browser to the new Owner
        return redirect("/owners/{$owner->id}");        
    }

    public function edit(Owner $owner)
    {
        return view("owners/edit", [
            "owner" => $owner
        ]);
    }

    public function editPost(OwnerRequest $request, Owner $owner)
    {
        // get all of the submitted data
        $data = $request->all();
        // fill current owner with data
        $owner->fill($data)->save();
        // redirect the browser to the Owner
        return redirect("/owners/{$owner->id}");        
    }


}
