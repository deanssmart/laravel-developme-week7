<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\OwnerRequest;
use App\Http\Requests\AnimalRequest;
use Illuminate\Support\Facades\DB;

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
        $animals = $owner->animals;

        return view("owners/show", [
            "owner" => $owner,
            "animals" => $animals->sortByDesc("updated_at"),
        ]);
    }

    public function create()
    {
        return view("owners/create");
    }

    public function createPost(OwnerRequest $request)
    {
        $data = $request->all();
        $owner = Owner::create($data);
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
        $data = $request->all();
        $owner->update($data);
        return redirect("/owners/{$owner->id}");        
    }

    public function search(Request $request)
    {
        $query = $request->get('search');
        return view("owners/search", [
            "owners" => Owner::where('first_name', 'LIKE', '%' . $query . '%')
                               ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                               ->get()->sortByDesc("updated_at")
        ]);

    }

    public function destroy(Owner $owner)
    {
        $owner->delete();
        return redirect("/owners/index");
    }

}
