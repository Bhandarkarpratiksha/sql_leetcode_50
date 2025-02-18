<?php

//Two pointer in place method

function reverse_array(&$arr){
    $n = count($arr);
    $left = 0;
    $right = $n - 1;

    while($left < $right){
        [$arr[$left],$arr[$right]] = [$arr[$right],$arr[$left]];
        $left++;$right--;
    }

    //return $arr;
}
$arr = [5, 3, 6, 8, 2];
//$reversed_arr = reverse_array($arr);
//print_r($reversed_arr);
reverse_array($arr);
print_r($arr);