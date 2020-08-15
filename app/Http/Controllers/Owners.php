<?php

namespace App\Http\Controllers;

use Session;
use App\Owner;
use Illuminate\Http\Request;
use App\Http\Requests\OwnerRequest;
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
        $owner->fill($data)->save();
        return redirect("/owners/{$owner->id}");        
    }

    public function search(Request $request)
    {
        $name = $request->get('search');
        return view("owners/search", [
            "owners" => Owner::where('first_name', 'LIKE', '%' . $name . '%')
                               ->orWhere('last_name', 'LIKE', '%' . $name . '%')
                               ->get()->sortByDesc("updated_at")
        ]);

    }

    public function destroy(Owner $owner)
    {
        $owner->delete();
        return redirect("/owners/index");
    }

}
