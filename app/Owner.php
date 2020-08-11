<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Owner extends Model
{
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
        if($this->address_2 !== null){
            $fullAddress = collect([$this->address_1, $this->address_2, $this->town, $this->postcode]);
            return $fullAddress->join("\n");
        } else {
            $fullAddress = collect([$this->address_1, $this->town, $this->postcode]);
            return $fullAddress->join("\n");
        }
    }

    public function formattedPhoneNumber()
    {
        $formattedNumber = sprintf("%s %s %s",
                                   substr($this->telephone, 0, 4),
                                   substr($this->telephone, 4, 3),
                                   substr($this->telephone, 7, 4));
        return $formattedNumber;
    }
}