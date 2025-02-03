<?php

// Sum of Digits
// To find sum of digits of a number just add all the digits.

// For example,

// 14597 = 1 + 4 + 5 + 9 + 7  
// 14597 = 26  
// Logic:

// Take the number.
// Divide the number by 10.
// Add the remainder to a variable.
// Repeat the process until remainder is 0.
// -------------------------------------------------

$num = 123456;
$sum = 0;
$rem = 0;

$strtemplength = strlen($num);

for($i = 0; $i <= $strtemplength; $i++){
    $rem = $num % 10;
    $sum = $sum + $rem;
    $num = $num/10;
}
print_r($sum);

//optmized code
//Your current code has a few inefficiencies:

// Loop runs one extra time: The condition should be $i < $strtemplength, not $i <= $strtemplength.
// Unnecessary strlen() function: Since $num is an integer, strlen($num) isn't the best way to determine the number of digits. Instead, you can simply loop while $num > 0.
// Integer division issue: $num = $num / 10; results in a float. Using integer division ($num = intdiv($num, 10);) is better.

$num = 123456;
$sum = 0;

while ($num > 0) {
    $sum += $num % 10;  // Get the last digit and add to sum
    $num = intdiv($num, 10); // Remove last digit
}

echo $sum;

//
#optmized code with for loop

$num = 123456;
$sum = 0;

for (; $num > 0; $num = intdiv($num, 10)) {
    $sum += $num % 10;  // Extract last digit and add to sum
}

echo $sum;

