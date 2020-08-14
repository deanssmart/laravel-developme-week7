<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Owner extends Model
{
    protected $fillable = [    
        "first_name",
        "last_name",
        "telephone",
        "email",
        "address_1",
        "address_2",
        "town",
        "postcode",
    ];

    public static function haveWeBananas(int $number) : string
    {
        if ($number <= 0) {
            return "No we have no bananas";
        } else if ($number === 1) {
            return "Yes we have {$number} banana";
        } else {
            return "Yes we have {$number} bananas";
        }
    }

    public function fullName() : string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function fullAddress() : string
    {
       return $this->address_2 ?
       join("\n", [$this->address_1, $this->address_2, $this->town, $this->postcode]) :
       join("\n", [$this->address_1, $this->town, $this->postcode]);
    
    }

    public function formattedPhoneNumber() : string
    {
        $formattedNumber = sprintf("%s %s %s",
                                   substr($this->telephone, 0, 4),
                                   substr($this->telephone, 4, 3),
                                   substr($this->telephone, 7, 4));
        return $formattedNumber;
    }

    public static function checkExistingEmail($email) : bool
    {
        return Owner::where('email', $email)->exists();
    }

}