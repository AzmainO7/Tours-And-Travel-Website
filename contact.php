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

                <form action = "contact.php" onsubmit="sendEmail()">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" />
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
                    <input type="submit" value="Send" class="btn-contact" />
                </form>
            </div>
        </div>
    </div>

    <script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
    function sendEmail(){
        Email.send({
        Host : "smtp.elasticemail.com",
        Username : "robinn96a@gmail.com",
        Password : "FA70684B112EDD41674526A28E0F9734DBC9",
        To : 'saifulpiash00@gmail.com',
        From : document.getElementById("email").value ,
        Subject : "New Contact From Enquiry",
        Body : "And this is the body"
    }).then(
    message => alert(message)
);
    }

</script>

    <!-- contact form END -->

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/contact.js"></script>

</body>

</html>