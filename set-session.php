<?php

session_start();

$_SESSION["name"] = "Sam";

$_SESSION["user"] = [
    "name" => "Tom",
    "email" => "tom@test.com",
    "phone" => "0912345668"
];
