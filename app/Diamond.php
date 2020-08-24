<?php

namespace App;

class Diamond
{
    public function form(string $letter) : string
    {
        $letters = range("A", $letter);
        $length = count($letters);
        $newLettersArr = [];        

        foreach($letters as $index => $letter){
            if($letter === "A"){
                $newLettersArr[] = str_repeat(" ", $length - 1)."A".str_repeat(" ", $length - 1)."\n";
            } else{
                $newLettersArr[] = str_repeat(" ", $length - ($index + 1)).$letter.str_repeat(" ", ((2 * $index) - 1)).$letter.str_repeat(" ", $length - ($index + 1))."\n";
            }
        }

        $newLettersArrMirror = array_reverse($newLettersArr);
       
        $trimmedMirrorArr = array_splice($newLettersArrMirror, 1, $length);

        $mergeArr = array_merge($newLettersArr, $trimmedMirrorArr);

        dump(implode("", $mergeArr));
        return implode("", $mergeArr);
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