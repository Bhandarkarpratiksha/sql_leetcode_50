<?php

// given an array=[1,4,5,6,7,8] target=13 find the element  whose sum is equal to 13  and return true or false if it have element sum equal to 13 
// 🔹 Concept
// As we iterate through the array, we store each number in a Hash Set (associative array in PHP).
// For each number, we check if its complement (target - number) exists in the Hash Set.
// If the complement is found, we return true (pair exists).
// If we finish checking all elements without finding a pair, we return false.
// 🔹 Step-by-Step Execution
// Let’s take the example:

// php
// $array = [1, 4, 5, 6, 7, 8];
// $target = 13;
// 1️⃣ Initialize an empty Hash Set ($seen = [])
// 2️⃣ Traverse the array
// 3️⃣ For each number:

// Calculate its complement: target - num
// Check if complement exists in Hash Set
// If yes, return true
// If no, store the current number in Hash Set 4️⃣ If the loop finishes without finding a pair, return false

function findPairWithSum($arr, $target){
    $seen = [];
    $pair = [];
    foreach ($arr as $value){
        $complement = $target - $value;
        
        if(isset($seen[$complement]))
            $pair[] = "($complement, $value)";
        
        $seen[$value] = true;
    }
    return implode(',',$pair);;
}

// Example usage
$array = [1, 4, 5, 6, 7, 8];
$target = 13;

$x = findPairWithSum($array, $target);
print_r($x);

//brute force approach

function hasPairWithSumBruteForce($arr, $target) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] + $arr[$j] == $target) {
                return true;
            }
        }
    }
    
    return false;
}     

$array = [1, 4, 5, 6, 7, 8];
$target = 13;

echo hasPairWithSumBruteForce($array, $target) ? "true" : "false"; // Output: true
// Time Complexity:
// ❌ O(n²) (Slower for large arrays)