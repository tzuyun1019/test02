<?php

setcookie("name", "May", time()+3600, "/");

if (isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
}

?>