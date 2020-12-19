<?php

// while

// Loop with $counter
$count = 0;
while($count < 10) {
    echo "count: {$count} <br>";
    $count++;
}

// do - while
$count = 0;
do {
    $count++;
    echo "count: {$count} <br>";
} while ($count < 10);

// for
for ($i=0; $i < 10; $i++) { 
    echo "count: {$i} <br>";
}

// foreach
$names = ["bob", "mary", "jill", "jamal"];
foreach($names as $i => $name) {
    echo $i . " " . $name . "<br>";
}

// Iterate Over associative array.
$students = [
    "Yoshi" => 123,
    "Pepper" => 456,
    "Jeremiah" => 789,
    "Kerri-Ann" => 010 
];

foreach($students as $key => $value) {
    echo $key . " " . $value . "<br>";
}