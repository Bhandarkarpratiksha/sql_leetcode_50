<?php
// <!-- Randomly generate n number of characters from a given character set (such as uppercase, lowercase, numbers)
// and no repeated characters are allowed in the generation verification code string -->


// Here’s an algorithm to generate a non-repeating array containing 26 English characters (uppercase and lowercase), numbers, and symbols. Since there are more than 26 unique characters in this set, we’ll randomly select 26 unique characters from it.

// Algorithm:
// Define the character set: Create a string or array that contains the following characters:

// Uppercase English letters (A-Z)
// Lowercase English letters (a-z)
// Digits (0-9)
// Common symbols (e.g., !@#$%^&*()_+-=[]{}|;:'",.<>?)
// Shuffle the character set: Randomly shuffle the character set to ensure randomness.

// Select the first 26 characters: From the shuffled set, select the first 26 unique characters.

// Return the result: Output the array of 26 unique characters.

// Step-by-step Algorithm:
// Input: None (since we are generating the array of characters).
// Output: A non-repeating array of 26 unique characters.
// Pseudo Code:

// 1. Initialize the character set (e.g., uppercase letters, lowercase letters, digits, and symbols).
// 2. Shuffle the character set randomly.
// 3. Select the first 26 characters from the shuffled character set.
// 4. Return the selected 26 characters as an array.


function generateRandomString($length) {
    // Define the character set (uppercase, lowercase, and numbers)
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;:\'",.<>?';

    
    // Shuffle the character set and pick the first $length characters
    $randomString = substr(str_shuffle($characters), 0, $length);
    
    return $randomString;
}

// Example usage: Generate a string of length 10
$length = 10;
$randomString = generateRandomString($length);
echo "Random string: " . $randomString . "\n";
