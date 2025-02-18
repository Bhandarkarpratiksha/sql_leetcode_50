<?php
function selectionSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        // Swap
        if($minIndex != $i)
            [$arr[$i], $arr[$minIndex]] = [$arr[$minIndex], $arr[$i]];
    }
    return $arr;
}

$numbers = [5, 3, 8, 6, 2];
print_r(selectionSort($numbers));




// Algorithm	        Best Case	Average Case	Worst Case	Space Complexity
// Bubble Sort	          O(n)	     O(n²)	          O(n²)	        O(1)
// Selection Sort	      O(n²)	     O(n²)	          O(n²)	        O(1)
// Insertion Sort	      O(n)	     O(n²)	          O(n²)	        O(1)