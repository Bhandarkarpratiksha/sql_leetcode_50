<?php

// The FizzBuzz problem is a simple coding challenge often used in programming interviews or as a beginner's exercise. It requires you to print numbers from 1 to 100, but with a few special rules:

// For numbers that are divisible by 3, print "Fizz" instead of the number.
// For numbers that are divisible by 5, print "Buzz" instead of the number.
// For numbers that are divisible by both 3 and 5, print "FizzBuzz" instead of the number.
// If the number is not divisible by either 3 or 5, print the number itself.

// ------------------

#fizzbuzz problem solution

function fizzbuzz($initalNum, $endNum){
    for($i = $initalNum; $i <= $endNum; $i++){
        if( $i % 3 == 0 )
            echo "fizz\n";
        elseif ( $i % 5 == 0)
            echo "Buzz\n";
        elseif ( $i % 3 == 0 && $i % 5 == 0)
            echo "FizzBuzz\n";
        else 
            echo "$i\n";
        
    }
}

FizzBuzz(1,30);