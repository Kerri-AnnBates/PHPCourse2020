<?php

// What is class and instance
class Person {
    public string $name;
    public int $age;
    private ?float $salary; // Optional

    public function __construct($n, $a, $s) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}
