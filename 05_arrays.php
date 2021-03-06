<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo "<pre>";
var_dump($fruits);
echo "<pre>";
echo "<br>";

// Get element by index
echo "<p>Print fist element in array: <b>{$fruits[0]}</b></p>";

// Set element by index
$fruits[2] = "Kiwi";
echo "<p>New list of array is:</p>";
echo "<pre>";
var_dump($fruits);
echo "<pre>";
echo "<br>";

// Check if array has element at index 2
echo "Does array have element at index 2:";
echo "<pre>";
var_dump(isset($fruits[2]));
echo "<pre>";
echo "<br>";

// Append element
$fruits[] = "Orange";

// Print the length of the array
$arr_length = count($fruits);
echo "<p>New length of array is: <b>{$arr_length}</b></p>";

// Add element at the end of the array
array_push($fruits, "Peach");
echo "<pre>";
var_dump($fruits);
echo "<pre>";
echo "<br>";

// Remove element from the end of the array
array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "<pre>";
echo "<br>";

// Add element at the beginning of the array
array_unshift($fruits, "Cantalope");
echo "<pre>";
var_dump($fruits);
echo "<pre>";
echo "<br>";

// Remove element from the beginning of the array
array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "<pre>";
echo "<br>";

// Split the string into an array
$string = "Banana,Apple,Orange";
echo $string;
echo "<pre>";
var_dump(explode(",", $string));
echo "<pre>";

// Combine array elements into string
echo "<pre>";
var_dump(implode(" & ", $fruits));
echo "<pre>";
print_r($fruits);

// Check if element exist in the array
in_array("Apple", $fruits); // true

// Search element index in the array
$idx = array_search("Apple", $fruits);
echo "<p>Index of Apple is at: <b>{$idx}</b></p>";

// Merge two arrays
$veggies = ["Cucumber", "Broccoli"];
$new_arr = array_merge($fruits, $veggies);
var_dump([...$fruits, ...$veggies]); // more modern php

// Sorting of array (Reverse order also)
sort($fruits);
print_r($fruits);
rsort($fruits);
print_r($fruits);

// Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers, fn($n) => $n % 2 === 0);

$squares = array_map(fn($n) => $n * $n, $numbers);

$sum = array_reduce($numbers, fn($acc, $n) => $acc + $n);

print_r($evens);
print_r($squares);
echo "Reduced array for sum of: {$sum}<br>";


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$students = [
    "Yoshi" => 123,
    "Pepper" => 456,
    "Jeremiah" => 789,
    "Kerri-Ann" => 010 
];

// Get element by key
echo "Student Yoshi id is: {$students["Yoshi"]}<br>";

// Set element by key
$students["Mariah"] = 342;

// Check if array has specific key
isset($students["Mariah"]); // True
isset($students["Bob"]); // False

// Print the keys of the array
print_r(array_keys($students));

// Print the values of the array
print_r(array_values($students));

// Sorting associative arrays by values, by keys
ksort($students);
print_r($students);

krsort($students);
print_r($students);

asort($students);
print_r($students);

arsort($students);
print_r($students);

// Two dimensional arrays
$todos_items = [
    ["title" => "item 1", "completed" => true],
    ["title" => "item 2", "completed" => false],
    ["title" => "item 3", "completed" => true],
];

print_r($todos_items);