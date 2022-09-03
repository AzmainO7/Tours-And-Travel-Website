<?php

include 'config.php';

if (isset($_POST['updatedata'])) {
    $id = $_POST['update_id'];

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST['password']);

    $sql = "UPDATE Users SET username = '$username', email = '$email', password = '$password' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:index.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
