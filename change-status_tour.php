<?php
include 'config.php';

if (isset($_GET["id"]) && isset($_GET["status"])) {
    $id = $_GET["id"];
    $status = $_GET["status"];

    if ($status == 0) {
        $sql = "UPDATE Tours SET active = 0 WHERE id = $id";
        mysqli_query($conn, $sql);
    } else if ($status == 1) {
        $sql = "UPDATE Tours SET active = 1 WHERE id = $id";
        mysqli_query($conn, $sql);
    }
}

header("location: admin_tours.php");
