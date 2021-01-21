<?php

    $json = file_get_contents("todos.json");
    $json_array = json_decode($json, true);

    if(isset($_POST["todo_name"])) {

        $todo_name = $_POST["todo_name"];

        unset($json_array[$todo_name]);
        file_put_contents("todos.json", json_encode($json_array));

        header("Location:  index.php");
    } else {
        echo "Item does not exist";
    }