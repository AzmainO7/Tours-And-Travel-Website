<?php

include 'config.php';

$email = $_GET["useremail"];
$id = $_GET["tourId"];
$rating = $_GET["rating"];

$sql = "SELECT * FROM Bookings WHERE email = '$email' && tour_id = $id && reviewed = '0'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $sql = "UPDATE Tours SET total_ratings = total_ratings + 1, sum_ratings = sum_ratings + $rating, ratings = sum_ratings/total_ratings  WHERE id = $id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $sql = "UPDATE Bookings SET reviewed = '1' WHERE email = '$email' && tour_id = $id";
        mysqli_query($conn, $sql);
        header('location:tours.php?id=' . $id . '');
    } else {
        echo "<script>alert('Something Went Wrong!')</script>";
    }
} else {
    echo "<script>alert('You have to book a tour in order to rate!')</script>";
}
