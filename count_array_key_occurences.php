<?php
// Write a Code that will build an object containing the keys as the integers of arrays and their values will be the count of occurrences of that integer in the array. Add an integer to that object only when its count of occurrence is greater than one.


// Input = [4, 6, 2, 8, 9, 2, 6, 7, 6]


// Output = {6: 3, 2: 2 }

// ---------------------------------------

function countOccurrences($inputArray){
    $countArrObj = [];
    
    foreach($inputArray as $value){
        (isset($countArrObj[$value])) ? $countArrObj[$value]++ : $countArrObj[$value] = 1;
        
    }
    
    foreach ($countArrObj as $key => $arrvalue){
        if($arrvalue <= 1)
            unset($countArrObj[$key]);
    }
     return $countArrObj;
 }
 
 $input = [4, 6, 2, 8, 9, 2, 6, 7, 6];
 
 $output = countOccurrences($input);
 print_r($output);

 // 2nd approach
 function countOccurrences1($inputArray) {
    // Count the occurrences of each element in the array
    $countObj = array_count_values($inputArray);

    // Filter the array to include only values that appear more than once
    $countObj = array_filter($countObj, function($count) {
        return $count > 1;
    });

    return $countObj;
}

$input = [4, 6, 2, 8, 9, 2, 6, 7, 6];

$output = countOccurrences1($input);
print_r($output);