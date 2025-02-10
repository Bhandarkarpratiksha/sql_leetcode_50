
<?php

// Problem Statment
// Write a Code for the below requirement Given an integer array nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[I]. The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer. You must write an algorithm that runs in O(n) time and without using the division operation. 

// Input: nums = [1,2,3,4] 

// Output: [24,12,8,6]

// -------------------------------
// solution Approach
// To solve this problem in O(n) time without using the division operation, we can approach it in two phases:

// Left Product: For each element in the array, calculate the product of all elements before it (i.e., the product of all elements to the left of the current element).
// Right Product: For each element, calculate the product of all elements after it (i.e., the product of all elements to the right of the current element).
// Then, we multiply the left and right products to get the final result for each element.

// Steps:
// Initialize two arrays:
// left_products: stores the product of all elements before the current element.
// right_products: stores the product of all elements after the current element.
// First pass: Fill the left_products array where each index stores the product of all elements to the left of that index.
// Second pass: Traverse the array from right to left and compute the final product by multiplying the left_products with the right_products.

function productExceptSelf($nums) {
    $n = count($nums);
    
    // Initialize result array
    $result = array_fill(0, $n, 1);

    // Left product calculation (store in result)
    $leftProduct = 1;
    for ($i = 0; $i < $n; $i++) {
        $result[$i] = $leftProduct;
        $leftProduct *= $nums[$i];
    }

    // Right product calculation and final result
    $rightProduct = 1;
    for ($i = $n - 1; $i >= 0; $i--) {
        $result[$i] *= $rightProduct;
        $rightProduct *= $nums[$i];
    }

    return $result;
}

// Example input
$nums = [1, 2, 3, 4];

// Call the function and print the result
$output = productExceptSelf($nums);
print_r($output);







