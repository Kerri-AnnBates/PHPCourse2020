<?php

// What is a variable

// Variable types

// Declare variables
$name = "Kerri-Ann"; // string
$age = 32; // integer
$isFemale = true; // boolean
$weight = 154.7; //double
$salary = null; // null


// Print the variables. Explain what is concatenation
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Weight: " . $weight . "<br>";
echo "Salary: " . $salary . "<br>";
echo "isFemale: " . $isFemale . "<br>";
echo "<br>";

// Print types of the variables
echo "Name: " . gettype($name) . "<br>";
echo "Age: " . gettype($age) . "<br>";
echo "Weight: " . gettype($weight) . "<br>";
echo "Salary: " . gettype($salary) . "<br>";
echo "isFemale: " . gettype($isFemale) . "<br>";
echo "<br>";

// Print the whole variable using var dump
var_dump($name);
echo "<br>";

// Change the value of the variable
$name = 28;

// Print type of the variable
echo "Print type of the variable<br>";
echo "Name after variable change: " . gettype($name) . "<br>";
echo "<br>";

// Variable checking functions. Checking the type of the variable
echo "Checking the type of the variable<br>";
is_string($name); // False since we changed to number
var_dump(is_string($name));
is_int($name); // True
echo "<br>";

// Check if variable is defined
echo "Check if variable is defined<br>";
var_dump(isset($address)); // False
var_dump(isset($name)); // True
echo "<br>";

// Constants
echo "declaring and printing a constant.<br>";
define("PI", 3.14);
echo PI;

// check if constant is defined
defined("PI");
echo "<br>";

// Using PHP built-in constants
echo PHP_INT_MAX;
