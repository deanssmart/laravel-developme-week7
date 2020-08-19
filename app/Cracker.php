<?php

namespace App;

class Cracker
{

    private $keys;
    private $letters = [
                        "a",
                        "b",
                        "c",
                        "d",
                        "e",
                        "f",
                        "g",
                        "h",
                        "i",
                        "j",
                        "k",
                        "l",
                        "m",
                        "n",
                        "o",
                        "p",
                        "q",
                        "r",
                        "s",
                        "t",
                        "u",
                        "v",
                        "w",
                        "x",
                        "y",
                        "z"
                    ];

    
    
    public function __construct(string $keys)
    {
        $this->keys = explode(" ", $keys);
    } 
    

    public function decrypt(string $code) : string
    {
        $dictionary = array_combine($this->keys, $this->letters);
        $codeArr = str_split($code);

        $answer = "";
        foreach($codeArr as $value){
            $answer .= $value === " " ? " " : $dictionary[$value];        
        }

        return $answer;
        
    }

}