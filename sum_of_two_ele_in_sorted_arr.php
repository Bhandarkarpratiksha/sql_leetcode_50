<?php
// Find two elements in a sorted array whose sum equals a target value
// array ? -3 0 3 6 8 14 18 25
// target value ? 17 -> 3 + 14

//Using two pointer method

//Algorithm
// Use two pointers (left at the start, right at the end).
// Check the sum of the two numbers.
// If it matches the target, return the pair.
// If the sum is less than the target, move the left pointer forward.
// If the sum is greater, move the right pointer backward.
// Repeat until a pair is found or pointers cross.

function findPairWithSum($arr, $target)
{
    $left = 0;
    $right = count($arr) - 1;
    $sum = 0;
    
    while($left < $right){
        $sum = $arr[$left] + $arr[$right];
        if($sum == $target)
            return [$arr[$left], $arr[$right]];
        else if($sum < $target)
            $left++;
        else
            $right--;
    }
    
    return 'No pair found';
}

$arr = [-3, 0, 3, 6, 8, 14, 18, 25];
$target = 17;
$result = findPairWithSum($arr, $target);
if (is_array($result)) {
    echo "Pair found: " . $result[0] . " + " . $result[1] . " = " . $target;
} else {
    echo $result;
}