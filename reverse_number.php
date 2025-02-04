<?php

#reverse a number
#12345 = 54321

$num = 12345;
$rev = $rem = 0;

while($num > 0){
    $rem = $num % 10;
    $rev = $rev * 10 + $rem;
    $num = intdiv($num, 10);
}

echo "$rev\n";