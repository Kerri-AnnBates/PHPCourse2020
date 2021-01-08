<?php

setcookie("name", "Packer", time() + 60, "/");

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";