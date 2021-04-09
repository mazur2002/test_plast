<?php
$connection = mysqli_connect(localhost, root, root);
$select_db = mysqli_select_db($connection, plast);

$result_holovna = mysqli_query($connection, "SELECT * FROM `holovna`");
$holovna = mysqli_fetch_assoc($result_holovna);

$result_meta = mysqli_query($connection, "SELECT * FROM `meta_plastu`");
$meta = mysqli_fetch_assoc($result_meta);


if ($connection == false) {
    echo "Не вдалось з'єднатися :( ";
}