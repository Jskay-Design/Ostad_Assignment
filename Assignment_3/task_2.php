<?php

// Task 2: Array Manipulation

$numbers = range(1, 10);

function removeEven($n)
{
    return $n % 2 != 0;
}

$result = array_filter($numbers, 'removeEven');

print_r($result);