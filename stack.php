<?php

// Stack Operations
// Push: Add an element to the top of the stack.
// Pop: Remove the top element from the stack.
// Peek (Top): Get the top element without removing it.
// isEmpty: Check if the stack is empty.

class Stack {
    private $stack = [];

    // Push operation: Adds an element to the stack
    public function push($value) {
        array_push($this->stack, $value);
    }

    // Pop operation: Removes and returns the top element
    public function pop() {
        if ($this->isEmpty()) {
            return "Stack is empty";
        }
        return array_pop($this->stack);
    }

    // Peek operation: Returns the top element without removing it
    public function peek() {
        if ($this->isEmpty()) {
            return "Stack is empty";
        }
        return end($this->stack);
    }

    // Check if stack is empty
    public function isEmpty() {
        return empty($this->stack);
    }

    // Display the stack
    public function display() {
        print_r(array_reverse($this->stack)); // Reverse to show top element first
    }
}

// Example usage
$stack = new Stack();

$stack->push(10);
$stack->push(20);
$stack->push(30);

echo "Top Element: " . $stack->peek() . "\n"; // Output: 30
echo "Popped Element: " . $stack->pop() . "\n"; // Output: 30

$stack->display(); // Remaining elements in the stack
