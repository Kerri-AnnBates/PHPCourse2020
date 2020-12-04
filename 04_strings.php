<?php

// Create simple string
$name = "Kerri-Ann";
$hello = "Hello ";
$hello2 = 'Hello ';

// String concatenation
$message = "Hello $name";
echo $message . "<br>";

$message2 = $hello2 . $name;
echo $message2 . "<br>";

// String functions
$string = "     Hello   World ";

echo "1 - " . strlen($string) . "<br>" . PHP_EOL;
echo "2 - " . trim($string) . "<br>" . PHP_EOL;
echo "3 - " . ltrim($string) . "<br>" . PHP_EOL;
echo "4 - " . rtrim($string) . "<br>" . PHP_EOL;
echo "5 - " . str_word_count($string) . "<br>" . PHP_EOL;
echo "6 - " . strrev($string) . "<br>" . PHP_EOL;
echo "7 - " . strtoupper($string) . "<br>" . PHP_EOL;
echo "8 - " . strtolower($string) . "<br>" . PHP_EOL;
echo "9 - " . ucfirst("hello") . "<br>" . PHP_EOL;
echo "10 - " . lcfirst("HELLO") . "<br>" . PHP_EOL;
echo "11 - " . ucwords("hello world") . "<br>" . PHP_EOL;
echo "12 - " . strpos($string, "world") . "<br>" . PHP_EOL;
echo "13 - " . strpos($string, "World") . "<br>" . PHP_EOL;
echo "14 - " . substr("hello world", 8) . "<br>" . PHP_EOL;
echo "15 - " . str_replace("World", "PHP", $string) . "<br>" . PHP_EOL;
echo "16 - " . str_ireplace("World", "PHP", $string) . "<br>" . PHP_EOL;

// Multiline text and line breaks
$longText = "
    Hello, my name is KB
    and i have
    a dog named 
    yoshi
";

echo $longText . "<br>";
echo nl2br($longText) . "<br>";

// Multiline text and reserve html tags
$longText2 = "
    Hello, my name is <b>KB</b>
    and i have
    a dog named 
    <b>yoshi</b>
";

echo "1 - " . $longText2 . "<br>" . PHP_EOL;
echo "2 - " . nl2br($longText2) . "<br>" . PHP_EOL;
echo "3 - " . htmlentities($longText2) . "<br>" . PHP_EOL;
echo "4 - " . html_entity_decode(htmlentities($longText2)) . "<br>" . PHP_EOL;
echo "5 - " . htmlspecialchars($longText2) . "<br>" . PHP_EOL;

// https://www.php.net/manual/en/ref.strings.php
