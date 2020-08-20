<?php

namespace App;

use App\Animal;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public $timestamps = false;

    protected $fillable = ["name"];

    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }

    static public function fromString(string $string) : Treatment
    {
        $string = trim($string);        
        $treatment = Treatment::firstWhere("name", $string);
        return $treatment ? $treatment : Treatment::create(["name" => $string]);
    }

    static public function fromStrings(array $strings) : Collection
    {        
        return collect($strings)->map([Treatment::class, "fromString"])->unique("name");
    }
}
