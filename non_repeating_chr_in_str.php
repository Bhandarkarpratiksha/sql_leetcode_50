<?php

function firstNonRepeatingChar($str) {
    $charCount = [];
    
    // Count occurrences of each character
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }
    
    // Find the first character with count 1
    for ($i = 0; $i < strlen($str); $i++) {
        if ($charCount[$str[$i]] == 1) {
            return $str[$i];
        }
    }
    
    return null; // Return null if no unique character is found
}

// Example usage
$str = "swiss";
echo "First non-repeating character: " . firstNonRepeatingChar($str);

// ====================================

$string = 'swiss';
$str_arr = str_split($string);
$str_key_counts = array_count_values($str_arr);

$non_repeating_chr = array_filter($str_key_counts, function($count){
    return $count == 1;
});
$chr = implode(' ',array_keys(array_splice($non_repeating_chr, 0,1)));
echo $chr;