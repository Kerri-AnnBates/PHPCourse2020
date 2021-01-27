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

                <form style="display:inline-block;" action="change_status.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todo_name; ?>">
                    <input type="checkbox" <?php echo $todo["completed"] ? "checked" : ""; ?> class="checkbox">
                </form>
                
                <?php echo $todo_name; ?>

                <form style="display:inline-block;" action="delete.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todo_name; ?>">
                    <button>Delete</button>
                </form>
            </div>

    <?php } ?>

    <script>
        window.onload = (event) => {
            const checkboxes = document.querySelectorAll("input[type=checkbox]");

            checkboxes.forEach(checkbox => {
                
                checkbox.addEventListener("click", (e) => {
                    console.log(this.parentNode);
                });

            });
        }
        

    </script>

</body>
</html>