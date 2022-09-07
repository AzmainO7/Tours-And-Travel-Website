<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contact.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php require_once 'nav_bar.php'; ?>

    <!-- contact form START -->
    <div class="container-contact" style="margin-top: 25px;">
        <span class="big-circle"></span>

        <div class="form-contact">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    We'd Love to hear from you.<br>

                    Whether you are curious about features, a free trial, or even press- we are ready to answer any and all questions.
                </p>

                <div class="info">
                    <div class="information">
                        <img src="images/icons8-address-48.png" class="icon-contact" alt="" />
                        <p>92 Cherry Drive Uniondale, NY 11553</p>
                    </div>
                    <div class="information">
                        <img src="images/icons8-mail-96.png" class="icon-contact" alt="" />
                        <p>Etours00@tour.com</p>
                    </div>
                    <div class="information">
                        <img src="images/icons8-phone-50.png" class="icon-contact" alt="" />
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="" method="POST">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input"/>
                        <!-- <input type="text" name="name" class="input" value="<?= $_SESSION['username'] ?>" /> -->
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input"/>
                        <!-- <input type="email" name="email" class="input" value="<?= $_SESSION['user_email_address'] ?>" /> -->
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <button class="btn-contact" name="submit" type="submit">Send</button>
                    <!-- <input type="submit" value="Send" class="btn-contact" /> -->
                </form>
            </div>
        </div>
    </div>

    <?php

    include 'config.php';

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $sql = "INSERT INTO Inbox (username, email, phone, message)
                       VALUES('$name','$email','$phone','$message')";
        mysqli_query($conn, $sql);

        echo "<script>alert('Message Sent!')</script>";
    };

    ?>

    <!-- contact form END -->

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/contact.js"></script>

</body>

</html>