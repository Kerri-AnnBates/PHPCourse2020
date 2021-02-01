<?php
    $connection = require_once "./Connection.php";

    $new_note = $_POST;
    $id = isset($_POST["id"]) ? $_POST["id"] : "";

    if ($id) {
        $connection->updateNote($_POST); // Update
    } else {
        $connection->addNote($new_note); // Add Note
    }

    header("Location:  index.php");