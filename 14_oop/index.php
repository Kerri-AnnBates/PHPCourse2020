<?php

require_once "./Person.php";
require_once "./Student.php";

$p = new Person("Yoshi", 6, null);
// $p->name = "Yoshi";
// $p->$age = 6;
// $p->$salary = null;

echo $p->getSalary() . "<br>";
$p->setSalary(20);
echo $p->getSalary() . "<br>";


echo "<pre><br>";
echo var_dump($p);
echo "<pre><br>";

$s = new Student("Pepper", 6, 1000);

echo "<pre><br>";
echo var_dump($s);
echo "<pre><br>";