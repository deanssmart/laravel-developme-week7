<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public static function haveWeBananas($number)
    {
        if ($number <= 0) {
            return "No we have no bananas";
        } else if ($number === 1) {
            return "Yes we have {$number} banana";
        } else {
            return "Yes we have {$number} bananas";
        }
    }
}
