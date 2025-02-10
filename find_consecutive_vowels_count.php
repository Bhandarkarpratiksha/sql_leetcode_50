<?php
// Find the count of two consecutive vowels in a given string

$vowels = 'aeiouAEIOU';
$count = 0;
function getConsecutiveVowelsCount($string){
    global $vowels;
    global $count;
    for($i = 0; $i < strlen($string)-1; $i++){
        if(strpos($vowels, $string[$i]) !== false && strpos($vowels, $string[$i+1]) !== false){
            $count++;
        }
    }
    
    return $count;
}

$string  = "beautiful";
echo "Consecutive vowels count ". getConsecutiveVowelsCount($string);


