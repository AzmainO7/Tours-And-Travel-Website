<?php
include 'config.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM Users WHERE id = $id";
    mysqli_query($conn, $sql);
}

header("location: admin_users.php");
