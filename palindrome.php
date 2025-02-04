<?php
// Palindrome Number
// A palindrome number is a number which remains same when its digits are reversed.

// For example, number 24142 is a palindrome number. On reversing it we?ll get the same number.

// Logic:

// Take a number.
// Reverse the input number.
// Compare the two numbers.
// If equal, it means number is palindrome

// -------------------------------

$num = 12321;
$temp = $num;
$sum = $rem = 0;
while($num > 0){
    $rem = $num % 10;

    $sum = $sum * 10 + $rem;
   
    $num = intdiv($num, 10);
}
echo ($temp == $sum) ? "$temp is palindrome number" : "$temp not a palindrome number";
