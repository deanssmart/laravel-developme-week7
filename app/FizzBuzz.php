<?php

namespace App;

class FizzBuzz
{    

    public function forNumber(int $n) : string
    {

        $str = "";

        $str .= $n % 3 === 0 ? "Fizz" : "";
        $str .= $n % 5 === 0 ? "Buzz" : "";
        $str .= $n % 7 === 0 ? "Rarr" : "";
        return $str === "" ? "$n" : $str;

    }

}


    //     if($n % 3 === 0 && $n % 5 === 0 && $n % 7 === 0){
    //         return "FizzBuzzRarr";
    //     } elseif($n % 3 === 0 && $n % 5 === 0){
    //         return "FizzBuzz";
    //     } elseif($n % 3 === 0 && $n % 7 === 0){
    //         return "FizzRarr";
    //     } elseif($n % 5 === 0 && $n % 7 === 0){
    //         return "BuzzRarr";
    //     } elseif($n % 3 === 0){
    //         return "Fizz";
    //     } elseif($n % 5 === 0){
    //         return "Buzz";
    //     } elseif($n % 7 === 0){
    //         return "Rarr";
    //     }
    //     return "$n";                
    // }