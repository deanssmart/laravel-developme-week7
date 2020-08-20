<?php

namespace App;

class Diamond
{
    public function form(string $letter) : string
    {
        $letters = range("A", $letter);
        $outerSpacing = count($letters);
        $newLettersArr = [];

        foreach($letters as $index => $letter){
            if($letter === "A"){
                // dump($letter);
                $newLettersArr[] = str_repeat("_", $outerSpacing - 1)."A".str_repeat("_", $outerSpacing - 1)."\n";
            } else {
                // dump($letter);
                $newLettersArr[] = str_repeat("_", $outerSpacing - ($index + 1)).$letter.str_repeat("_", ((2 * $index) - 1)).$letter.str_repeat("_", $outerSpacing - ($index + 1))."\n";
            }
        }
        dump(implode("", $newLettersArr));
        return implode("", $newLettersArr);
    }
}




// $letters = range("A", $letter);

// // $print = "";

// foreach($letters as $key => $letter){
//     $repeater = $key;
//     if($letter === "A"){
//         dump(str_repeat(" ", $repeater + 1).$letter.str_repeat(" ", $repeater + 1));
//     } else {
//     dump($letter.str_repeat(" ", $repeater).$letter);
//     }
    
// }

// $space = " ";
// // dump(ord("B") - ord("A"));

// return $letter;