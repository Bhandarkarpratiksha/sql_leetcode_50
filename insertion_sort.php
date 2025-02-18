<?php
//sort arr in asc order

function insertionSort($arr){
    $n = count($arr);
    for($i=0; $i<$n; $i++){
        $key = $arr[$i];
        $j = $i-1;
        while($j>=0 && $arr[$j] > $key){
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $key;
    }
    return $arr;
}

$unsorted_arr = [12, 5, 7, 1, 7, 8, 3];
$sorted_arr = insertionSort($unsorted_arr);
print_r($sorted_arr);



// Algorithm	        Best Case	Average Case	Worst Case	Space Complexity
// Bubble Sort	          O(n)	     O(n²)	          O(n²)	        O(1)
// Selection Sort	      O(n²)	     O(n²)	          O(n²)	        O(1)
// Insertion Sort	      O(n)	     O(n²)	          O(n²)	        O(1)
