<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [    
        "name",
        "type",
        "dob",
        "weight",
        "height",
        "biteyness",
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function dangerous() : bool
    {
        return $this->biteyness >= 3;
    }

    public function age() : int
    {
        return date_diff(date_create($this->dob), date_create('today'))->y;
    }
}
