<?php
// Armstrong Number
// An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.

// 0, 1, 153, 371, 407 etc are Armstrong numbers.

// For example,

// 407 = (4*4*4) + (0*0*0) + (7*7*7)  
//         = 64 + 0 + 343  
// 407 = 407  

// Logic

// Take the number.
// Store it in a variable.
// Take a variable for sum.
// Divide the number with 10 until quotient is 0.
// Cube the remainder.
// Compare sum variable and number variable.

function isArmstrong($num) {
    $temp = $num;
    $sum = 0;

    while ($num > 0) {
        $rem = $num % 10;
        $sum += pow($rem, 3);  // More concise addition
        $num = intdiv($num, 10); // Ensures integer division
    }

    return $sum === $temp;
}

$num = 405;
echo isArmstrong($num) ? "$num is an Armstrong number" : "$num is not an Armstrong number";
