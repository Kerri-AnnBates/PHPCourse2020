<?php

// Function which prints "Hello I am TheCodeholic"
function hello() {
    echo "Hello, I am Kerri-ann<br>";
}

hello();

// Create sum of two functions
function sum($a, $b) {
    return $a + $b;
}

echo sum(32, 12) . "<br>";

// Create function to sum all numbers using ...$nums
function sumAll(...$nums) {
    $total = array_reduce($nums, fn($acc, $num) => $acc + $num);
    echo $total . "<br>";
}

sumAll(1,2,3,4,5,6,7,8,9,0);

// Arrow functions
$msg = fn($name) => "Hello {$name}!<br>";


echo $msg("Yoshi");

