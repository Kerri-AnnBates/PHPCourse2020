<?php

$error_message = "";

if (isset($_FILES["file"])) {

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

    $file = $_FILES["file"];

    if ($file["type"] === "image/png") {
        move_uploaded_file($file["tmp_name"], "test.png");
    } else {
        $error_message = "You can only upload images.";
    }

}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Upload an image</p>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <button>Submit</button>
    </form>
    <p style="background:firebrick;color:white;"><?php echo isset($error_message) ? $error_message : "" ?></p>

    <img src="./test.png" alt="">
</body>

</html>