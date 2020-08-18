<?php

namespace App\Http\Controllers\API\Owners;

use App\Owner;
use App\Animal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Animals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Owner $owner)
    {
        $animals = $owner->animals;
        return $animals;  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Owner $owner)
    {
        $animal = new Animal($request->all());
        $owner->animals()->save($animal);
        return $animal;
    }

}
