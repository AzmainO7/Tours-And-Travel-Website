<?php

include 'config.php';

?>

<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'nav_bar.php'; ?>

    <!-- Carousel -->

    <section class="container pt-5 my-5" style="margin-top: 25px;">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/5.jpg" class="d-block w-100" alt="..." width="500" height="700">
                </div>
                <div class="carousel-item">
                    <img src="images/7.jpg" class="d-block w-100" alt="..." width="500" height="700">
                </div>
                <div class="carousel-item">
                    <img src="images/9.jpg" class="d-block w-100" alt="..." width="500" height="700">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!--bio type-->

    <section class="container pt-5 my-5">
        <div class="mb-5 ">
            <h2 class="fw-bolder pb-5">United States</h2>
        </div>
        <p>Lorem ipsum dolor sit amet,
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
    </section>



    <!-- popular tours START -->
    <section class="container pt-5 my-5">
        <div class="mb-5 text-center">
            <h1 class="fw-bolder pb-5">United States</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 mb-5">
                    <div class="card h-100 div-rounded" style="width: auto;">
                        <div class="img-wrapper div-rounded-top">
                            <img src="images/nyork-450x300.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>New York</h6>
                            <h5 class="card-title fw-bolder mb-3">Two Hour Walking Tour of Manhattan</h5>
                            <p class="text-muted mb-5"><i class="bi bi-star-fill text-warning me-2"></i><span class="text-dark fw-bolder">5 </span>(3 reviews)</p>
                            <div class="card-footer bg-white pt-4 pb-0">
                                <div class="row">
                                    <div class="col-6 m-0 p-0">
                                        <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$100,00
                                        </h6>
                                    </div>
                                    <div class="col-6 text-end m-0 p-0">
                                        <p class="text-muted"><i class="bi bi-clock me-2"></i>10 hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-5">
                    <div class="card h-100 div-rounded" style="width: auto;">
                        <div class="img-wrapper div-rounded-top">
                            <img src="images/sanfran-450x300 (1).jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>San Francisco</h6>
                            <h5 class="card-title fw-bolder mb-3">American Parks Trail end Rapid City Express</h5>
                            <p class="text-muted mb-5"><i class="bi bi-star-fill text-warning me-2"></i><span class="text-dark fw-bolder">5 </span>(3 reviews)</p>
                            <div class="card-footer bg-white pt-4 pb-0">
                                <div class="row">
                                    <div class="col-6 m-0 p-0">
                                        <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$100,00
                                        </h6>
                                    </div>
                                    <div class="col-6 text-end m-0 p-0">
                                        <p class="text-muted"><i class="bi bi-clock me-2"></i>10 hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 mb-5">
                    <div class="card h-100 div-rounded" style="width: auto;">
                        <div class="img-wrapper div-rounded-top">
                            <img src="images/calfor-450x300.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>California</h6>
                            <h5 class="card-title fw-bolder mb-3">Cannes and Antibes Night Tour the Seine Extraordinaire</h5>
                            <p class="text-muted mb-5"><i class="bi bi-star-fill text-warning me-2"></i><span class="text-dark fw-bolder">5 </span>(3 reviews)</p>
                            <div class="card-footer bg-white pt-4 pb-0">
                                <div class="row">
                                    <div class="col-6 m-0 p-0">
                                        <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$100,00
                                        </h6>
                                    </div>
                                    <div class="col-6 text-end m-0 p-0">
                                        <p class="text-muted"><i class="bi bi-clock me-2"></i>10 hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 mb-5">
                    <div class="card h-100 div-rounded" style="width: auto;">
                        <div class="img-wrapper div-rounded-top">
                            <img src="images/newj-450x300.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>New Jersey</h6>
                            <h5 class="card-title fw-bolder mb-3">Giverny and Versailles Small Group Day Trip</h5>
                            <p class="text-muted mb-5"><i class="bi bi-star-fill text-warning me-2"></i><span class="text-dark fw-bolder">5 </span>(3 reviews)</p>
                            <div class="card-footer bg-white pt-4 pb-0">
                                <div class="row">
                                    <div class="col-6 m-0 p-0">
                                        <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$100,00
                                        </h6>
                                    </div>
                                    <div class="col-6 text-end m-0 p-0">
                                        <p class="text-muted"><i class="bi bi-clock me-2"></i>10 hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>



    <!--newsletter -->
    <section class="container my-5 pb-5 pt-5">
        <div class="row justify-content-center bg-light div-rounded">
            <div class="col-xl-6 img-wrapper p-0 div-rounded-start">
                <img class="mw-100" src="images/Rectangle-7-min.png" alt="">
            </div>
            <div class="col-xl-6 text-center p-5 my-5">
                <h2 class="fw-bolder">Get special offers, and <br> more from Traveler</h2>
                <p class="text-muted">Subscribe to see secret deals prices drop the <br> moment you sign up!</p>
                <form action="" class="mx-4">
                    <div class="row mx-lg-5 mt-5 py-2 bg-white rounded-pill border border-2">
                        <div class="col-8">
                            <input type="text" class="form-control border-0" placeholder="Email Address" aria-label="Email Address">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-secondary rounded-pill px-md-3">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>