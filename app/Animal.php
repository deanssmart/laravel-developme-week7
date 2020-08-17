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
}
