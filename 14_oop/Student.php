<?php

require_once "./Person.php";

class Student extends Person {
    public int $studentId;

    public function __construct($name, $age, $studentId) {
        $this->studentId = $studentId;

        parent::__construct($name, $age, null);
    }
}