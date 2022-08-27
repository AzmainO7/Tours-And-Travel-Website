<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['login'])) {

    $emailLog = mysqli_real_escape_string($conn, $_POST['emailLog']);
    $passwordLog = md5($_POST['passwordLog']);

    $select = " SELECT * FROM Users WHERE email = '$emailLog' && password = '$passwordLog' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        $_SESSION['username'] = $row['username'];
        header('location:index.php');
    } else {
        // $error[] = 'incorrect email or password!';
        echo "<script>alert('incorrect email or password!')</script>";
    }
};

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $select = " SELECT * FROM Users WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        // $error[] = 'user already exist!';
        echo "<script>alert('email already in use!')</script>";
    } else {

        if ($password != $cpassword) {

            // $error[] = 'password not matched!';
            echo "<script>alert('password not matched!')</script>";
        } else {
            $sql = "INSERT INTO Users (username, email, password)
                       VALUES('$username','$email','$password')";
            mysqli_query($conn, $sql);

            $username = "";
            $email = "";
            $password = "";
            $cpassword = "";

            echo "<script>alert('User Registration Complete')</script>";
            // $error[] = 'User Registration Complete';
            // header('location:login_form.php');
        }
    }

    // if ($password == $cpassword) {
    //     $sql = "INSERT INTO Users (username, email, password)
    //             VALUES ('$username', '$email', '$password')";
    //     $result = mysqli_query($conn, $sql);
    //     if ($result) {
    //         echo 'User Registration Complete';
    //         $username = "";
    //         $email = "";
    //         $password = "";
    //         $cpassword = "";
    //     } else {
    //         echo 'Oops! Something Went Wrong';
    //     }
    // } else {
    //     echo 'Password Not Matched';
    // }


};

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

    <!-- navigation bar START -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow"> -->
            <div class="container">
                <a class="navbar-brand fs-2 pe-5" href="#">
                    <i class="bi bi-airplane me-2 text-danger"></i>
                    E-Tour</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item me-4">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="listings.php">LISTINGS</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="tours.php">TOUR</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="destinations.php">DESTINATIONS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MORE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="about.php">ABOUT US</a></li>
                                <li><a class="dropdown-item" href="contact.php">CONTACT</a></li>
                                <li><a class="dropdown-item" href="faqs.php">FAQs</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- show/hide login/logout button condition -->
                    <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) { ?>

                        <div>
                            <a><i class="bi bi-person text-danger fs-5 me-2"></i><span class="text-danger"><?php echo $_SESSION['username'] ?></span></a>
                            <a href="logout.php" class="ps-4 text-dark">logout</a>
                        </div>

                    <?php } else { ?>

                        <a href="" class="btn btn-danger rounded-pill ms-auto" data-bs-toggle="modal" data-bs-target="#loginModal" data-backdrop="static">
                            <i class="bi bi-person me-2"></i>Login / Register</a>

                    <?php } ?>
                    <!-- show username -->
                    <!-- <div>
                        <a><span class="text-danger"><?php echo $_SESSION['username'] ?></span></a>
                        <a href="logout.php" class="ps-4 text-dark">logout</a>
                    </div> -->

                    <!-- Button trigger modal -->
                    <!-- <a href="" class="btn btn-danger rounded-pill ms-auto" data-bs-toggle="modal" data-bs-target="#loginModal" data-backdrop="static">
                        <i class="bi bi-person me-2"></i>Login / Register</a> -->

                    <!-- Modal LOGIN -->
                    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="loginModalLabel">SIGN IN</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="" method="POST">
                                            <div class="row py-2">
                                                <label for="emailLog" class="form-label">Email <span class="text-danger">*</label>
                                                <input type="email" class="form-control" placeholder="Email" name="emailLog" required>
                                            </div>
                                            <div class="row py-2">
                                                <label for="passwordLog" class="form-label">Password <span class="text-danger">*</label>
                                                <input type="password" class="form-control" placeholder="Password" name="passwordLog" required>
                                            </div>
                                            <div class="row py-4">
                                                <button name="login" class="btn btn-danger">Login</button>
                                            </div>
                                            <p class="text-center">Don't Have An Account?<a href="" class="text-danger ps-2" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal" style="text-decoration: none;">Register Here</a>.</p>
                                        </form>

                                        <p class="text-center text-muted">or</p>
                                        <p class="text-center fs-5 mb-4">Login Using Social Media</p>
                                        <div class="row justify-content-center mb-4">
                                            <div class="col-6 text-center">
                                                <div class="py-2 div-rounded-less socialFacebook">
                                                    <a href="#"><i class="bi bi-facebook facebook"></i>Facebook</a>
                                                </div>
                                            </div>
                                            <div class="col-6 text-center">
                                                <div class="py-2 div-rounded-less socialGoogle">
                                                    <a href="#"><i class="bi bi-google google"></i>Google</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal REGISTER -->
                    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="registerModalLabel">SIGN UP</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">

                                        <form action="" method="POST">
                                            <?php
                                            if (isset($error)) {
                                                foreach ($error as $error) {
                                                    echo '<span class="py-2 text-danger">' . $error . '</span>';
                                                };
                                            };
                                            ?>
                                            <div class="row py-2">
                                                <label for="username" class="form-label">Username <span class="text-danger">*</label>
                                                <input type="text" class="form-control" placeholder="enter your username" name="username" required>
                                            </div>
                                            <div class="row py-2">
                                                <label for="email" class="form-label">Email <span class="text-danger">*</label>
                                                <input type="email" class="form-control" placeholder="enter your email" name="email" required>
                                            </div>
                                            <div class="row py-2">
                                                <label for="password" class="form-label">Password <span class="text-danger">*</label>
                                                <input type="password" class="form-control" placeholder="enter your password" name="password" required>
                                            </div>
                                            <div class="row py-2">
                                                <label for="cpassword" class="form-label">Confirm Password <span class="text-danger">*</label>
                                                <input type="password" class="form-control" placeholder="confirm your password" name="cpassword" required>
                                            </div>
                                            <div class="row py-4">
                                                <button name="register" class="btn btn-danger">Register</button>
                                            </div>
                                            <p class="text-center">Already Have An Account?<a href="" class="text-danger ps-2" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal" style="text-decoration: none;">Login
                                                    Here</a>.</p>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </section>
    <!-- navigation bar END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>