<?php
/*
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci 
numbers. But, if a Fibonacci number is greater than 100, break out of 
the loop using the break statement.
*/
$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    // Calculate the next Fibonacci number
    $next = $first + $second;

    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Exit the loop if the condition is met
    }

    // Print the current Fibonacci number
    echo $next . " ";

    // Update the variables for the next iteration
    $first = $second;
    $second = $next;
}

?>