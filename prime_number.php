<?php
// <!-- Prime Number
// A number which is only divisible by 1 and itself is called prime number. Numbers 2, 3, 5, 7, 11, 13, 17, etc. are prime numbers.

// 2 is the only even prime number.
// It is a natural number greater than 1 and so 0 and 1 are not prime numbers.

// ---------------------------------- -->

function getPrimeNumber($num){
    
    if($num < 2) return false;
    
    for($i=2; $i < sqrt($num); $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}


for($num=1; $num < 100; $num++){
echo getPrimeNumber($num) ? "$num\n" :'';
}


