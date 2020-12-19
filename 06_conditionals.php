<?php

$age = 20;
$salary = 300000;

// if condition
if ($age >= 21) {
    echo "you are old enough to drink";
}

// if condition - else
if ($age >= 21) {
    echo "you are old enough to drink";
} else {
    echo "you are not old enough to drink";
}
echo "<br>";
// if condition1 AND condition2
if ($age < 20 && $salary < 20000) {
    echo "you are making a great start to life";
}

// if condition1 OR condition2
if ($age < 20 || $salary > 20000) {
    echo "you are young or rich lol";
}
echo "<br>";

// if condition1 - elseif condition2 - else

// if condition1 and condition2 - elseif condition1 and condition2 - else

// Ternary if
echo $age < 21 ? "You do not have permission to drink" : "You have permission to drink";
echo "<br>";

// Null coalescing operator
// if ($age) {
//     $myAge = $age;
// } else {
//     $myAge = 18;
// }

$myAge = $age ? $age : 18; // if age variable exists assign it to $myAge, else assign 18 to $myAge
echo $myAge . "<br>";

// Null coalescing assignment operator. Since PHP 7.4
$phone_numbers = [
    "Yoshi" => 4030203020
];

// if ( !isset($phone_numbers["Yoshi"]) ) {
//     $phone_numbers["Yoshi"] = 5555555555;
// }

$phone_numbers["Yoshi"] ??= 5555555555;
echo $phone_numbers["Yoshi"] . "<br>";

// switch
$user_role = "admin";

switch($user_role) {
    case "admin":
        echo "you are admin";
        break;
    case "editor":
        echo "you are editor";
    default:
    echo "Unknown role";
}