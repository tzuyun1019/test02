<h2>min</h2>
<?php
require_once("../db-connect.php");

$maxSql = "SELECT * FROM product WHERE price=(SELECT MAX(price) FROM product)";

$resultMax = $conn -> query($maxSql);
$rows = $resultMax -> fetch_all(MYSQLI_ASSOC);
var_dump($rows);
?>

<h2>Min</h2>
<?php

$minSql = "SELECT * FROM product WHERE price=(SELECT MIN(price) FROM product)";

$resultMin = $conn -> query($minSql);
$rows = $resultMin -> fetch_all(MYSQLI_ASSOC);
var_dump($rows);

