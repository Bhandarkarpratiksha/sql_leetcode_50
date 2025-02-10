<?php

//Write a program to reverse string by using stack

function reverseStringUsingStack($str) {
    $stack = [];
    $length = strlen($str);

    // Push each character to the stack
    for ($i = 0; $i < $length; $i++) {
        array_push($stack, $str[$i]);
    }

    $reversedStr = "";
    
    // Pop characters from the stack to reverse the string
    while (!empty($stack)) {
        $reversedStr .= array_pop($stack);
    }

    return $reversedStr;
}

// Example usage
$inputString = "hello";
$reversedString = reverseStringUsingStack($inputString);

echo "Original String: " . $inputString . "\n";  // Output: hello
echo "Reversed String: " . $reversedString . "\n";  // Output: olleh
