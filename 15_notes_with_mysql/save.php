<?php
    $connection = require_once "./Connection.php";

    // echo "<pre>";
    // echo var_dump($_POST);
    // echo "<prev";

    $new_note = $_POST;
    $id = isset($_POST["id"]) ? $_POST["id"] : "";

    if ($id) {
        $connection->updateNote($_POST); // Update
    } else {
        $connection->addNote($new_note); // Add Note
    }

    header("Location:  index.php");