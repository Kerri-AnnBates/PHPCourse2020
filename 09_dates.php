<?php

// Print current timestamp
echo time() . "<br>";

// Print current date
echo date("m-d-y H:i:s A") . "<br>";

// Print yesterday
echo date("m-d-y H:i:s", time() - 60 * 60 * 24) . "<br>";

// Different format: https://www.php.net/manual/en/function.date.php
echo date("F j Y H:i:s A") . "<br>";

// String to timestamp
$timestamp = strtotime("now") . "<br>";

echo date("F j Y", $timestamp) . "<br>";

// Parse date: https://www.php.net/manual/en/function.date-parse.php

// Parse date from format
// https://www.php.net/manual/en/function.date-parse-from-format.php
