<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "tours and travel website";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn) {
    echo "<script>alert('Database Connection Failed')</script>" ;
}

?>