<?php

include 'config.php';
include 'nav_bar.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>E-Tour</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>

    <!-- checkout START -->
    <div class="container py-5" style="margin-top: 75px;">
        <div class="row justify-content-center">
            <div class="col-8 pe-4">
                <h4 class="fw-bold mb-4">Booking Submission</h4>
                <hr>
                <form class="row g-4 mt-4">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="First name" id="inputEmail4" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Last Name <span class="text-danger">*</label>
                        <input type="text" class="form-control" placeholder="Last name" id="inputPassword4" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email <span class="text-danger">*</label>
                        <input type="email" class="form-control" placeholder="email@domain.com" id="inputEmail4"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Phone <span class="text-danger">*</label>
                        <input type="text" class="form-control" placeholder="Your Phone" id="inputPassword4" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Address Line 1</label>
                        <input type="text" class="form-control" placeholder="Your Address Line 1" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Address Line 2</label>
                        <input type="text" class="form-control" placeholder="Your Address Line 2" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Your City" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">State/Province/Region</label>
                        <input type="text" class="form-control" placeholder="State/Province/Region" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">ZIP code/Postal code</label>
                        <input type="text" class="form-control" placeholder="ZIP code/Postal code" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Country</label>
                        <input type="text" class="form-control" placeholder="Country" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Special Requirements</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                            placeholder="Special Requirements" rows="4"></textarea>
                    </div>
                    <div>
                        <h4 class="fw-bold my-4">Select Payment Method</h4>
                        <div class="d-flex my-4">
                            <div class="form-check me-5">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Credit/Debit Card
                                </label>
                                <!-- <label for="input1" class="form-label">Name On Card</label>
                                <input type="text" class="form-control" placeholder="Your City" id="input1"> -->
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Bkash
                                </label>
                            </div>
                        </div>
                        <div class="row justify-content-center pb-4">
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">Name On Card <span class="text-danger">*</label>
                                <input type="text" class="form-control" placeholder="Name On Card" id="inputPassword4">
                            </div>
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">Card Number <span class="text-danger">*</label>
                                <input type="text" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx" id="inputPassword4">
                            </div>
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">Expire Date <span class="text-danger">*</label>
                                <input type="date" class="form-control" placeholder="Expire Date" id="inputPassword4">
                            </div>
                            <div class="col-md-6 py-3">
                                <label for="inputPassword4" class="form-label">CVV <span class="text-danger">*</label>
                                <input type="text" class="form-control" placeholder="xxxx" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and accept the<a target="_blank" href="" class="text-danger"> terms and
                                    conditions</a> and <a
                                    href="https://shinetheme.com/travelerdata/citytour/privacy-and-cookies/"
                                    target="_blank" class="text-danger">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-danger px-5">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <h4 class="fw-bold mb-4">Your Booking</h4>
                <div class="border border-danger">
                    <div class="p-4">
                        <h6>Northern California Summer 2019</h6>
                        <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>New York</h6>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between p-4">
                        <div>
                            <h6 class="mb-3">Tour type</h6>
                            <h6 class="mb-3">Departure date</h6>
                            <h6 class="mb-3">Durations</h6>
                        </div>
                        <div>
                            <h6 class="mb-3">Daily Tour</h6>
                            <h6 class="mb-3">23/08/2022</h6>
                            <h6 class="mb-3">5 days</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between bg-light mx-4 p-4">
                        <div>
                            <h6 class="mb-3">Number of Adults</h6>
                            <h6 class="mb-3">Number of Children</h6>
                            <h6 class="mb-3">Number of Infant</h6>
                        </div>
                        <div>
                            <h6 class="mb-3">1</h6>
                            <h6 class="mb-3">2</h6>
                            <h6 class="mb-3">0</h6>
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
                        <div class="text-end">
                            <h6 class="mb-3">€150,00</h6>
                            <h6 class="mb-3">€100,00</h6>
                            <h6 class="mb-3">€50,00</h6>
                            <h6 class="mb-3">€300,00</h6>
                            <h6 class="mb-3">10 %</h6>
                            <h5 class="mb-3 fw-bold">€330,00</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- checkout END -->

    <!-- footer START -->
    <section class="container-fluid bg-light py-5 px-5">
        <div class="d-md-flex justify-content-around">
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Support</h5>
                <p class="text-muted mb-2">Help Center</p>
                <p class="text-muted mb-2">Our COVID-19 Response</p>
                <p class="text-muted mb-2">Cancellation options</p>
                <p class="text-muted mb-2">Safety information</p>
            </div>
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Company</h5>
                <p class="text-muted mb-2">About us</p>
                <p class="text-muted mb-2">Community Blog</p>
                <p class="text-muted mb-2">Careers</p>
                <p class="text-muted mb-2">Privacy policy</p>
                <p class="text-muted mb-2">Terms of service</p>
            </div>
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Contact</h5>
                <p class="text-muted mb-2">Partnerships</p>
                <p class="text-muted mb-2">FAQ</p>
                <p class="text-muted mb-2">Get in touch</p>
            </div>
            <div class="mb-5">
                <h5 class="fw-bolder pb-4">Socials</h5>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-twitter"></i></a>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-instagram"></i></a>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-facebook"></i></a>
                <a class="px-2 text-secondary fs-2" href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>

        <div class="d-flex justify-content-center pt-5">
            <p class="text-muted">Copyright &copy;2022 E-Tours & Travels LLC. Designed by <span class="text-danger">Md.
                    Azmain
                    Mahtab & Shiful Islam Piash.</span></p>
        </div>

    </section>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>