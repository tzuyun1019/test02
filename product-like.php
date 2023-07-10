<?php
require_once("../db-connect.php");

$sql = "SELECT product.name AS product_name, user_like.*, COUNT(user_like.product_id) AS product_count FROM user_like
JOIN product ON user_like.product_id = product.id
GROUP BY user_like.product_id
ORDER BY product.id ";

$result = $conn -> query($sql);
$rows = $result -> fetch_all(MYSQLI_ASSOC);

// var_dump($rows);
?>

<ul>
    <?php foreach($rows as $product): ?>
        <li><?=$product["product_id"]?>. <?=$product["product_name"]?>: <?=$product["product_count"]?></li>
    <?php endforeach; ?>
</ul>