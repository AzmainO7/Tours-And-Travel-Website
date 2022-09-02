<?php

include 'config.php';

error_reporting(0);

$sql = "SELECT * FROM Users";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $user_count = mysqli_num_rows($result);
}

$sql = "SELECT * FROM tours";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $tour_count = mysqli_num_rows($result);
}


$sql = "SELECT SUM(subtotal) AS subtotal FROM bookings";

if ($result = mysqli_query($conn, $sql)) {

    $row = mysqli_fetch_assoc($result);
    $subtotal = $row['subtotal'];
    $net_count = number_format((float)$subtotal, 2, '.', '');
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>E-Tour</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>
    <div class="row justify-content-center m-0">
        <div class="col-sm-2 bg-dark text-light text-center sticky-top" style="height: 100vh;">
            <h3 class="p-4">Admin <br> Panel</h3>
            <hr>
            <div class="list-group">
                <a href="admin_panel.php" class="btn btn-light m-3 text-start" aria-current="true">Dashboard</a>
                <a href="admin_users.php" class="btn btn-dark p-3 text-start">Users</a>
                <a href="admin_tours.php" class="btn btn-dark p-3 text-start">Tours</a>
                <a href="admin_bookings.php" class="btn btn-dark p-3 text-start">Bookings</a>
                <a href="admin_inbox.php" class="btn btn-dark p-3 text-start">Inbox</a>
                <hr>
                <a href="index.php" class="btn btn-dark text-start">Back to site</a>
            </div>
        </div>
        <div class="col-sm-10 bg-light text-dark p-5">
            <h2>Dashboard</h2>
            <div class="row justify-content-around mt-5">
                <div class="col-3">
                    <div class="py-5 text-center bg-danger text-light div-rounded">
                        <h6 class="mb-3">TOP USER</h6>
                        <h3>XXX</h3>
                    </div>
                </div>
                <div class="col-3">
                    <div class="py-5 text-center bg-danger text-light div-rounded">
                        <h6 class="mb-3">NET EARNING TOTAL</h6>
                        <h3><?php echo "$net_count" ?></h3>
                    </div>
                </div>
                <div class="col-3">
                    <div class="py-5 text-center bg-danger text-light div-rounded">
                        <h6 class="mb-3">TOTAL USERS</h6>
                        <h3><?php echo "$user_count" ?></h3>
                    </div>
                </div>
                <div class="col-3">
                    <div class="py-5 text-center bg-danger text-light div-rounded">
                        <h6 class="mb-3">TOTAL TOURS</h6>
                        <h3><?php echo "$tour_count" ?></h3>
                    </div>
                </div>
            </div>
            <h2 class="mt-5">Statistics</h2>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>