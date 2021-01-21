<?php
    echo "<pre>";
    var_dump($_POST);
    echo "<pre>";

    
    $todoName = isset($_POST["todo_name"]) ? $_POST["todo_name"] : "";
    $todoName = trim($todoName);

    echo isset($_POST["todo_name"])."<br>";

    if($todoName) {

        if(file_exists("todos.json")) {
            $json = file_get_contents("todos.json");
            $json_array = json_decode($json, true);
        } else {
            $json_array = [];
        }

        $json_array[$todoName] = ["completed" => false];

        file_put_contents("todos.json", json_encode($json_array)); // should convert array back to json and add content back to todos.json file.

    }

    header("Location:  index.php"); // Redirect to index page.

    
?>