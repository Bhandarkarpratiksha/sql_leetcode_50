<?php

function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
            }
        }
    }
    return $arr;
}

$numbers = [5, 3, 8, 6, 2];
print_r(bubbleSort($numbers));



// Algorithm	        Best Case	Average Case	Worst Case	Space Complexity
// Bubble Sort	          O(n)	     O(n²)	          O(n²)	        O(1)
// Selection Sort	      O(n²)	     O(n²)	          O(n²)	        O(1)
// Insertion Sort	      O(n)	     O(n²)	          O(n²)	        O(1)

