<?php

//google login start
include 'config_google.php';
$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if (isset($_GET["code"])) {
    //It will Attempt to exchange a code for an valid authentication token.
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
    if (!isset($token['error'])) {
        //Set the access token used for requests
        $google_client->setAccessToken($token['access_token']);

        //Store "access_token" value in $_SESSION variable for future use.
        $_SESSION['access_token'] = $token['access_token'];

        //Create Object of Google Service OAuth 2 class
        $google_service = new Google\Service\Oauth2($google_client);

        //Get user profile data from google
        $data = $google_service->userinfo->get();

        //Below you can find Get profile data and store into $_SESSION variable
        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['user_email_address'] = $data['email'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if (!isset($_SESSION['access_token'])) {
    //Create a URL to obtain user authorization
    $login_button = '1';
}

//google login end

include 'config.php';

session_start();

if (isset($_POST['login'])) {

    $emailLog = mysqli_real_escape_string($conn, $_POST['emailLog']);
    $passwordLog = md5($_POST['passwordLog']);

    $select = " SELECT * FROM Users WHERE email = '$emailLog' && password = '$passwordLog' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        $_SESSION['username'] = $row['username'];
        $_SESSION['user_email_address'] = $row['email'];
        header('location:index.php');
    } else {
        // $error[] = 'incorrect email or password!';
        echo "<script>alert('incorrect email or password!')</script>";
    }
}

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
}

?>

<!-- navigation bar START -->

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white" style="position: fixed; top: 0; left: 0; width: 100%; display: flex;"> -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow"> -->
    <div class="container">
        <a class="navbar-brand fs-2 pe-5" href="admin_panel.php">
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
                    <a class="nav-link" href="listings.php">TOURS</a>
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

            <?php } else if ($login_button == '') { ?>

                <div>
                    <?php echo '<img src="' . $_SESSION["user_image"] . '" class="rounded-circle me-2" style="height: 30px; width: 30px;" />'; ?>
                    <a><span class="text-danger"><?php echo $_SESSION['user_email_address'] ?></span></a>
                    <a href="logout_google.php" class="ps-4 text-dark">logout</a>
                </div>

            <?php } else { ?>

                <a href="" class="btn btn-danger rounded-pill ms-auto" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="bi bi-person me-2"></i>Login / Register</a>

            <?php } ?>


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
                                            <?php
                                            echo '<a href="' . $google_client->createAuthUrl() . '"><i class="bi bi-google google"></i>Google</a>';
                                            ?>

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

            <!-- Test Modal -->
            <!-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Show a second modal and hide this one with the button below.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Hide this modal and show the first with the button below.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->
            <!-- Test Modal -->

        </div>
    </div>
</nav>

<!-- navigation bar END -->