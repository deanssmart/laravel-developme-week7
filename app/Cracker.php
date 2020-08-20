<?php

namespace App;

class Cracker
{

    private $keys;
    private $letters;    
    
    public function __construct(string $keys)
    {
        $this->keys = explode(" ", $keys); 
        $this->letters = range("a", "z");       
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