<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.5;

// Arithmetic operations
echo $a - $b . "<br>";
echo $a + $b . "<br>";

// Assignment with math operators
$a += $b; echo $a . "<br>";
$b += $b; echo $b . "<br>";

// Increment operator
$a++; echo "a is now: " . $a . "<br>";

// Decrement operator
$b--; echo "b is now: " . $b . "<br>";

// Number checking functions
var_dump(is_float($b)); // False
var_dump(is_float($c)); // True
//  is_integer();
// is_numeric();
echo "<br>";

// Conversion
echo "Type Casting<br>";
$strNumber = "12.34";
$number = (float)$strNumber;
// $number = (int)$strNumber;
var_dump($number);

// Number functions
echo "<br><br>Number Functions<br>";
echo "abs(-15): " . abs(-15) . "<br>";
echo "pow(3, 2): " . pow(3, 2) . "<br>";
echo "sqrt(16): " . sqrt(16) . "<br>";
echo "max(3, 2): " . max(3, 2) . "<br>";
echo "min(3, 2): " . min(3, 2) . "<br>";
echo "round(2.6): " . round(2.6) . "<br>";
echo "round(2.4): " . round(2.4) . "<br>";
echo "floor(2.6): " . floor(2.6) . "<br>";
echo "ceil(2.4): " . ceil(2.4) . "<br>";

// Formatting numbers
echo "Formatting numbers<br>";
$newNumber = 123456789.1234;
echo number_format($newNumber, 2, ".", ",");

// https://www.php.net/manual/en/ref.math.php
