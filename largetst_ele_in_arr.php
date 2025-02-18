<?php

function largest_ele_in_array($arr){
    $max = $arr[0];
    $n = count($arr);
    for($i=1;$i<$n; $i++){
        if($max < $arr[$i]) $max = $arr[$i]; 
    }
    
    return $max;
}
$arr = [5, 3, 6, 8, 2];
$max_ele = largest_ele_in_array($arr);
print_r($max_ele);