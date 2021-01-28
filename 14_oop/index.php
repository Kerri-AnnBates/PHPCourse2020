<?php

// What is class and instance
class Person {
    public string $name;
    public int $age;
    public float $salary;

    public function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
}

$p = new Person("Yoshi", 6, 10.00);
// $p->name = "Yoshi";
// $p->$age = 6;
// $p->$salary = null;


echo "<pre><br>";
echo var_dump($p);
echo "<pre><br>";

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
