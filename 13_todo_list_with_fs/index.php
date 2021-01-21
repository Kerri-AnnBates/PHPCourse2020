<?php
/**
 * User: TheCodeholic
 * Date: 2/18/2020
 * Time: 10:13 AM
 */

    $todos = [];

    if(file_exists("todos.json")) {
        $json = file_get_contents("todos.json");
        $todos = json_decode($json, true);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new_todo.php" method="post">
        <input type="text" name="todo_name" id="" placeholder="Enter your todo">
        <button>New Todo</button>
    </form>

    <?php foreach ($todos as $todo_name => $todo) { ?>
            
            <div style="margin-bottom: 20px;">
            <input type="checkbox" <?php echo $todo["completed"] ? "checked" : ""; ?> name="" id="">
                <?php echo $todo_name; ?>
                <button>Delete</button>
            </div>

    <?php } ?>
</body>
</html>