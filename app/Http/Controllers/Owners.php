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
            "animals" => $animals,
        ]);
    }

    public function createAnimalPost(AnimalRequest $request, Owner $owner)
    {
   
        $animal = new Animal($request->all());
        $owner->animals()->save($animal);

        return redirect("/owners/{$owner->id}");
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

    public function animalEdit(Owner $owner, Animal $animal)
    {
        return view("animals/edit", [
            "owner" => $owner,
            "animal" => $animal
        ]);
    }

    public function animalEditPost(AnimalRequest $request, Animal $animal, Owner $owner)
    {
        $owner = $animal->owner;
        $data = $request->all();
        $animal->fill($data)->save();
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

    public function animalDestroy(Animal $animal)
    {
        $owner = $animal->owner;
        $animal->delete();
        
        return redirect("/owners/{$owner->id}");
    }

}
