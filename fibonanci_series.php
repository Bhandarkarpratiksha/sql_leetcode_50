<?php
// Fibonacci Series
// Fibonacci series is the one in which you will get your next term by adding previous two numbers.

// For example,

// 0 1 1 2 3 5 8 13 21 34  
// Here, 0 + 1 = 1  
//             1 + 1 = 2  
//             3 + 2 = 5  
// and so on.

// Logic:
// Initializing first and second number as 0 and 1.
// Print first and second number.
// From next number, start your loop. So third number will be the sum of the first two numbers.

// ----------------------------------------

$a = 0;
$b = 1;
echo "$a\t$b\t";
for($i = 2; $i<10; $i++){
    $c = $a+$b;
    echo "$c\t";
    $a = $b;
    $b = $c;
    
}