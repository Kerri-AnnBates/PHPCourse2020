<?php
    $connection = require_once "./Connection.php";

    // echo "<pre>";
    // echo var_dump($_POST);
    // echo "<prev";

    $new_note = $_POST;
    $connection->addNote($new_note);

    header("Location:  index.php");