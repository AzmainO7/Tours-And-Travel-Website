<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'nav_bar.php'; ?>

    <!-- Success Modal -->
    <!-- <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- checkout START -->
    <div class="container py-5" style="margin-top: 25px;">
        <div class="row justify-content-center">
            <div class="col-lg-8 pe-4">
                <h4 class="fw-bold mb-4">Booking Submission</h4>
                <hr>
                <form action="" method="POST" class="row g-4 mt-4">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="First name" name="fname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Last Name <span class="text-danger">*</label>
                        <input type="text" class="form-control" placeholder="Last name" name="lname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email <span class="text-danger">*</label>
                        <input type="email" class="form-control" placeholder="email@domain.com" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Phone <span class="text-danger">*</label>
                        <input type="text" class="form-control" placeholder="Your Phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Address Line 1</label>
                        <input type="text" class="form-control" placeholder="Your Address Line 1" name="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Address Line 2</label>
                        <input type="text" class="form-control" placeholder="Your Address Line 2" name="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Your City" name="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">State/Province/Region</label>
                        <input type="text" class="form-control" placeholder="State/Province/Region" name="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">ZIP code/Postal code</label>
                        <input type="text" class="form-control" placeholder="ZIP code/Postal code" name="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Country</label>
                        <input type="text" class="form-control" placeholder="Country" name="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Special Requirements</label>
                        <textarea class="form-control" name="exampleFormControlTextarea1" placeholder="Special Requirements" rows="4"></textarea>
                    </div>
                    <div>
                        <h4 class="fw-bold my-4">Select Payment Method</h4>
                        <div class="d-flex my-4">
                            <div class="form-check me-5">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Credit/Debit Card
                                </label>
                                <!-- <label for="input1" class="form-label">Name On Card</label>
                                <input type="text" class="form-control" placeholder="Your City" id="input1"> -->
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Bkash
                                </label>
                            </div>
                        </div>
                        <div class="row justify-content-center pb-4">
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">Name On Card <span class="text-danger">*</label>
                                <input type="text" class="form-control" placeholder="Name On Card" value="Md. Azmain Mahtab" id="inputPassword4">
                            </div>
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">Card Number <span class="text-danger">*</label>
                                <input type="text" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx" value="2131-4524-5476-4352" id="inputPassword4">
                            </div>
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">Expire Date <span class="text-danger">*</label>
                                <input type="date" class="form-control" placeholder="Expire Date" value="<?php echo date("Y-m-d"); ?>" id="inputPassword4">
                            </div>
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">CVV <span class="text-danger">*</label>
                                <input type="text" class="form-control" placeholder="xxxx" value="8473" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and accept the<a target="_blank" href="" class="text-danger"> terms and
                                    conditions</a> and <a href="https://shinetheme.com/travelerdata/citytour/privacy-and-cookies/" target="_blank" class="text-danger">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button name="submit" class="btn btn-danger px-5">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">
                <h4 class="fw-bold mb-4">Your Booking</h4>
                <div class="border border-danger">
                    <div class="p-4">
                        <h6><?php echo $_GET["title"]; ?></h6>
                        <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i><?php echo $_GET["destination"]; ?></h6>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between p-4">
                        <div>
                            <h6 class="mb-3">Tour Type</h6>
                            <h6 class="mb-3">Departure date</h6>
                            <h6 class="mb-3">Durations</h6>
                        </div>
                        <div>
                            <h6 class="mb-3">Daily Tour</h6>
                            <h6 class="mb-3"><?php echo $_GET["date"]; ?></h6>
                            <h6 class="mb-3"><?php echo $_GET["duration"]; ?></h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between bg-light mx-4 p-4">
                        <div>
                            <h6 class="mb-3">Number of Adults</h6>
                            <h6 class="mb-3">Number of Children</h6>
                            <h6 class="mb-3">Number of Infant</h6>
                        </div>
                        <div>
                            <h6 class="mb-3"><?php echo $_GET["adult"]; ?></h6>
                            <h6 class="mb-3"><?php echo $_GET["children"]; ?></h6>
                            <h6 class="mb-3"><?php echo $_GET["infant"]; ?></h6>
                        </div>
                    </div>
                    <hr>
                    <div class="p-4">
                        <h6 class="mb-3">Coupon Code</h6>
                        <div class="d-flex justify-content-between">
                            <input type="text" name="" id="">
                            <button type="submit" class="btn btn-danger px-5">APPLY</button>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between p-4">
                        <div>
                            <h6 class="mb-3">Adult Price</h6>
                            <h6 class="mb-3">Children Price</h6>
                            <h6 class="mb-3">Infant Price</h6>
                            <h6 class="mb-3">Subtotal</h6>
                            <h6 class="mb-3">Tax</h6>
                            <h5 class="mb-3 fw-bold">Pay Amount</h5>
                        </div>
                        <?php
                        $adult_price = $_GET["price"] * $_GET["adult"];
                        $child_price = (50 / 100) * $_GET["price"] * $_GET["children"];
                        $infant_price = (25 / 100) * $_GET["price"] * $_GET["infant"];
                        $total_price = $adult_price + $child_price + $infant_price;
                        $tax = (10 / 100) * $total_price;
                        $subtotal = $total_price + $tax;
                        ?>
                        <div class="text-end">
                            <h6 class="mb-3">$<?php echo $adult_price ?></h6>
                            <h6 class="mb-3">$<?php echo $child_price ?></h6>
                            <h6 class="mb-3">$<?php echo $infant_price ?></h6>
                            <h6 class="mb-3">$<?php echo $total_price ?></h6>
                            <h6 class="mb-3">10 %</h6>
                            <h5 class="mb-3 fw-bold">$<?php echo $subtotal ?></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php

    include 'config.php';

    if (isset($_POST['submit'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $tour_id = mysqli_real_escape_string($conn, $_GET['id']);
        $adult_no = mysqli_real_escape_string($conn, $_GET['adult']);
        $children_no = mysqli_real_escape_string($conn, $_GET['children']);
        $infant_no =  mysqli_real_escape_string($conn, $_GET['infant']);
        $date =  mysqli_real_escape_string($conn, $_GET['date']);

        $sql = "INSERT INTO bookings (firstname, lastname, email, phone, tour_id, adult_no, children_no, infant_no, subtotal, b_date)
                       VALUES('$fname','$lname','$email','$phone','$tour_id','$adult_no','$children_no','$infant_no','$subtotal','$date')";
        mysqli_query($conn, $sql);

        echo "<script>alert('Booking Success!')</script>";
        // echo "<script type='text/javascript'>
        //       $(document).ready(function(){
        //       $('#successModal').modal('show');
        //       });
        //       </script>";
        //header('location: private_checkout.php');
    };

    ?>
    <!-- checkout END -->

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>