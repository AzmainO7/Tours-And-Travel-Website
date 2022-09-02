<?php

include 'config.php';

error_reporting(0);

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
                <a href="admin_panel.php" class="btn btn-dark p-3 text-start" aria-current="true">Dashboard</a>
                <a href="admin_users.php" class="btn btn-dark p-3 text-start">Users</a>
                <a href="admin_tours.php" class="btn btn-light m-3 text-start">Tours</a>
                <a href="admin_bookings.php" class="btn btn-dark p-3 text-start">Bookings</a>
                <a href="admin_inbox.php" class="btn btn-dark p-3 text-start">Inbox</a>
                <hr>
                <a href="index.php" class="btn btn-dark text-start">Back to site</a>
            </div>
        </div>

        <div class="col-sm-10 bg-light text-dark p-5">
            <h2>Add New Tour</h2>

            <?php if (isset($_GET['error0'])) : ?>
                <p class="text-danger pt-1"><?php echo $_GET['error0']; ?></p>
            <?php endif ?>

            <form action="upload.php" method="POST" enctype="multipart/form-data" class="row g-4 mt-4">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="" name="title" required>
                </div>

                <div class="col-md-12">
                    <label for="imgTitle" class="form-label">title_img <span class="text-danger">*</label>
                    <input type="file" name="title_img" class="form-control">
                    <?php if (isset($_GET['error'])) : ?>
                        <p class="text-danger pt-1"><?php echo $_GET['error']; ?></p>
                    <?php endif ?>
                </div>

                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">price <span class="text-danger">*</label>
                    <input type="number" class="form-control" placeholder="" name="price" required>
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">destination <span class="text-danger">*</label>
                    <select class="form-control" name="destination" id="destinations" required>
                        <option value="" selected>Select Destination</option>
                        <option>New York</option>
                        <option>San Francisco</option>
                        <option>California</option>
                        <option>New Jersey</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="duration" class="form-label">duration <span class="text-danger">*</label>
                    <input type="number" class="form-control" placeholder="duration" name="duration" required>
                </div>
                <div class="col-md-12">
                    <label for="overview" class="form-label">overview <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="overview" required>
                </div>
                <div class="col-md-12">
                    <label for="highlights_1" class="form-label">highlights_1 <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="highlights_1" required>
                </div>
                <div class="col-md-12">
                    <label for="highlights_2" class="form-label">highlights_2</label>
                    <input type="text" class="form-control" placeholder="" name="highlights_2">
                </div>
                <div class="col-md-12">
                    <label for="highlights_3" class="form-label">highlights_3</label>
                    <input type="text" class="form-control" placeholder="" name="highlights_3">
                </div>

                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">image_1 <span class="text-danger">*</label>
                    <input type="file" name="image_1" class="form-control">
                    <?php if (isset($_GET['error1'])) : ?>
                        <p class="text-danger pt-1"><?php echo $_GET['error1']; ?></p>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">image_2 <span class="text-danger">*</label>
                    <input type="file" name="image_2" class="form-control">
                    <?php if (isset($_GET['error2'])) : ?>
                        <p class="text-danger pt-1"><?php echo $_GET['error2']; ?></p>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">image_3</label>
                    <input type="file" name="image_3" class="form-control">
                    <?php if (isset($_GET['error3'])) : ?>
                        <p class="text-danger pt-1"><?php echo $_GET['error3']; ?></p>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">image_4</label>
                    <input type="file" name="image_4" class="form-control">
                    <?php if (isset($_GET['error4'])) : ?>
                        <p class="text-danger pt-1"><?php echo $_GET['error4']; ?></p>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">image_5</label>
                    <input type="file" name="image_5" class="form-control">
                    <?php if (isset($_GET['error5'])) : ?>
                        <p class="text-danger pt-1"><?php echo $_GET['error5']; ?></p>
                    <?php endif ?>
                </div>

                <div class="col-md-12">
                    <label for="itn_day1" class="form-label">itn_day1 <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="itn_day1" required>
                </div>
                <div class="col-md-12">
                    <label for="itn_day2" class="form-label">itn_day2 <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="itn_day2" required>
                </div>
                <div class="col-md-12">
                    <label for="itn_day3" class="form-label">itn_day3</label>
                    <input type="text" class="form-control" placeholder="" name="itn_day3">
                </div>
                <div class="col-md-12">
                    <label for="itn_day4" class="form-label">itn_day4</label>
                    <input type="text" class="form-control" placeholder="" name="itn_day4">
                </div>
                <div class="col-md-12">
                    <label for="itn_day5" class="form-label">itn_day5</label>
                    <input type="text" class="form-control" placeholder="" name="itn_day5">
                </div>
                <div class="col-md-6">
                    <label for="included_1" class="form-label">included_1 <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="included_1" required>
                </div>
                <div class="col-md-6">
                    <label for="excluded_1" class="form-label">excluded_1 <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="excluded_1" required>
                </div>
                <div class="col-md-6">
                    <label for="included_2" class="form-label">included_2</label>
                    <input type="text" class="form-control" placeholder="" name="included_2">
                </div>
                <div class="col-md-6">
                    <label for="excluded_2" class="form-label">excluded_2</label>
                    <input type="text" class="form-control" placeholder="" name="excluded_2">
                </div>
                <div class="col-md-6">
                    <label for="included_3" class="form-label">included_3</label>
                    <input type="text" class="form-control" placeholder="" name="included_3">
                </div>
                <div class="col-md-6">
                    <label for="excluded_3" class="form-label">excluded_3</label>
                    <input type="text" class="form-control" placeholder="" name="excluded_3">
                </div>
                <div class="col-md-6">
                    <label for="location" class="form-label">location <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="location" required>
                </div>
                <div class="col-md-12">
                    <label for="faq_1" class="form-label">faq_1 <span class="text-danger">*</label>
                    <input type="text" class="form-control" placeholder="" name="faq_1" required>
                </div>
                <div class="col-md-12">
                    <label for="faq_2" class="form-label">faq_2</label>
                    <input type="text" class="form-control" placeholder="" name="faq_2">
                </div>
                <div class="col-md-12">
                    <label for="faq_3" class="form-label">faq_3</label>
                    <input type="text" class="form-control" placeholder="" name="faq_3">
                </div>
                <div class="col-md-6">
                    <label for="ratings" class="form-label">ratings <span class="text-danger">*</label>
                    <input type="number" min="0" max="5" class="form-control" placeholder="" name="ratings" required>
                </div>

                <!-- <div class="col-md-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Special Requirements</label>
                    <textarea class="form-control" name="exampleFormControlTextarea1" placeholder="Special Requirements" rows="4"></textarea>
                </div> -->

                <div class="col-12">
                    <button name="submit" class="btn btn-danger px-5">Upload</button>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>