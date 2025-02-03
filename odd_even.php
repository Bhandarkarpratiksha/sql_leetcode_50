<?php
// Even Odd Program
// Even numbers are those which are divisible by 2. Numbers like 2,4,6,8,10, etc are even.

// Odd numbers are those which are not divisible by 2. Numbers Like 1, 3, 5, 7, 9, 11, etc are odd.

// Logic:

// Take a number.
// Divide it by 2.
// If the remainder is 0, print number is even.

$num = 1233456;
echo "$num is ". ($num % 2 === 0 ? "Even" : "Odd") ." number";