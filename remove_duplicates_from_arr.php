<?php
#Remove duplicate values from array

function removeDuplicates($array) {
    $uniqueArray = [];
    
    foreach ($array as $value) {
        // Check if the value is already in $uniqueArray
        if (!in_array($value, $uniqueArray)) {
            $uniqueArray[] = $value;
        }
    }
    
    return $uniqueArray;
}

// Example array with duplicate values
$array = [1, 2, 2, 3, 4, 4, 5];

// Remove duplicates
$uniqueArray = removeDuplicates($array);

// Print the unique array
print_r($uniqueArray);
// ---------------------
// approach 2

function removeDuplicates1($array) {
    $unique = [];
    
    foreach ($array as $value) {
        $unique[$value] = true; // Store values as keys to ensure uniqueness
    }

    return array_keys($unique);
}

// Example usage
$numbers = [1, 2, 2, 3, 4, 4, 5];
$uniqueNumbers = removeDuplicates1($numbers);

print_r($uniqueNumbers);

//approach 3

$numbers = [1, 2, 2, 3, 4, 4, 5];

$uniqueNumbers = array_keys(array_flip($numbers));

print_r($uniqueNumbers);

//approach 4 using array count values
$numbers = [1, 2, 2, 3, 4, 4, 5];

$uniqueNumbers = array_values(array_unique($numbers));

print_r($uniqueNumbers);

//suing array
$array = [1, 2, 2, 3, 4, 4, 5];

// Count values
$valueCounts = array_count_values($array);

// Filter to keep only values that appear once
$uniqueValues = array_keys(array_filter($valueCounts, function($count) {
    return $count === 1;
}));

print_r($uniqueValues);

// ===========================

function removeDuplicates2(&$nums) {
    $n = count($nums);
    if ($n == 0) return 0;
    
    $index = 1;
    for ($i = 1; $i < $n; $i++) {
        if ($nums[$i] != $nums[$i - 1]) {
            $nums[$index] = $nums[$i];
            $index++;
        }
    }
    
    return $index;
}

// Example usage
$nums = [1, 1, 2, 2, 3, 4, 4, 5];
$newLength = removeDuplicates2($nums);

// Output the unique elements
echo "New Length: " . $newLength . "\n";
echo "Modified Array: " . implode(", ", array_slice($nums, 0, $newLength)) . "\n";
