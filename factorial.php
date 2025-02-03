<?php

// The factorial of a number n is defined by the product of all the digits from 1 to n (including 1 and n).

// For example,

// 4! = 4*3*2*1 = 24  
// 6! = 6*5*4*3*2*1 = 720  
// Note:

// It is denoted by n! and is calculated only for positive integers.
// Factorial of 0 is always 1.

// ---------------------------------------

// Iterative Approach
function factorial($num) {
    $fact = 1;
    for ($i = 2; $i <= $num; $i++) { // Start from 2, since 1 has no effect
        $fact *= $i; // Shorthand for $fact = $fact * $i
    }
    return $fact;
}

$num = 10;
echo factorial($num);

//Recursive Approach
function factorial1($num) {
    return ($num <= 1) ? 1 : $num * factorial($num - 1);
}

$num = 10;
echo factorial1($num);