<?php

namespace App\Http\Controllers\API\Owners;

use App\Owner;
use App\Animal;
use App\Http\Requests\API\AnimalRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\API\AnimalResource;
use App\Http\Resources\API\AnimalListResource;

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
        return AnimalListResource::collection($animals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request, Owner $owner)
    {
        $animal = new Animal($request->all());
        $owner->animals()->save($animal);
        return new AnimalResource($animal);
    }

}
