<?php

    $json = file_get_contents("todos.json");
    $json_array = json_decode($json, true);

    $todoName = $_POST["todo_name"];

    if(isset($todoName)) {
        $json_array[$todoName]["completed"] = !$json_array[$todoName]["completed"];
    }

    file_put_contents("todos.json", json_encode($json_array));

    HEADER("Location: index.php");

?>