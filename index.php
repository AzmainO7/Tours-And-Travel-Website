<?php

include 'config.php';

//Home image size dimention = 1900 * 810

?>

<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'nav_bar.php'; ?>

    <!-- home section START -->
    <!-- <section class="pb-5"> -->
    <section class="pb-5" style="margin-top: 25px;">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Home1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h1 class="mb-5 fw-bold stroke">Your world of joy</h1>
                        <h4 class="d-none d-sm-block mb-5 stroke">Find what makes you happy anytime, anywhere</h4>
                        <div class="d-none d-lg-block">
                            <div class="row bg-light p-3 mb-5 div-rounded">
                                <div class="col-4 ps-4 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-geo-alt me-2"></i>Destination</label>
                                    <select class="form-control div-rounded-less" name="" id="">
                                        <?php
                                        $sql = "SELECT * FROM Destinations";
                                        $stmt = mysqli_stmt_init($conn);
                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                            echo "SQL statement failed";
                                        } else {
                                            mysqli_stmt_execute($stmt);
                                            $result = mysqli_stmt_get_result($stmt);
                        
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '
                                                <option>' . $row["name"] . '</option>
                                                ';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-3 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-calendar-check me-2"></i>Check
                                        in</label>
                                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control div-rounded-less" placeholder="Check in" aria-label="Check in">
                                </div>
                                <div class="col-3 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-calendar-minus me-2"></i>Check
                                        out</label>
                                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control div-rounded-less" placeholder="Check out" aria-label="Check out">
                                </div>
                                <div class="col-2">
                                    <a href="listings.php" class="btn btn-secondary div-rounded-less px-xxl-4 py-xxl-2 my-3">SEARCH</a>
                                    <!-- <button class="btn btn-secondary div-rounded-less px-xxl-4 py-xxl-2 my-3">SEARCH</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/Home2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h1 class="mb-5 fw-bold stroke">Your world of joy</h1>
                        <h4 class="d-none d-sm-block mb-5 stroke">Find what makes you happy anytime, anywhere</h4>
                        <div class="d-none d-lg-block">
                            <div class="row bg-light p-3 mb-5 rounded-pill">
                                <div class="col-4 ps-4 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-geo-alt me-2"></i>Destination</label>
                                    <select class="form-control rounded-pill" name="" id="">
                                    <?php
                                        $sql = "SELECT * FROM Destinations";
                                        $stmt = mysqli_stmt_init($conn);
                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                            echo "SQL statement failed";
                                        } else {
                                            mysqli_stmt_execute($stmt);
                                            $result = mysqli_stmt_get_result($stmt);
                        
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '
                                                <option>' . $row["name"] . '</option>
                                                ';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-3 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-calendar-check me-2"></i>Check
                                        in</label>
                                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control rounded-pill" placeholder="Check in" aria-label="Check in">
                                </div>
                                <div class="col-3 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-calendar-minus me-2"></i>Check
                                        out</label>
                                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control rounded-pill" placeholder="Check out" aria-label="Check out">
                                </div>
                                <div class="col-2">
                                    <a href="listings.php" class="btn btn-secondary rounded-pill px-xxl-4 py-xxl-2 my-3">SEARCH</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/Home4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h1 class="mb-5 fw-bold stroke">Your world of joy</h1>
                        <h4 class="d-none d-sm-block mb-5 stroke">Find what makes you happy anytime, anywhere</h4>
                        <div class="d-none d-lg-block">
                            <div class="row bg-light p-3 mb-5 rounded-pill">
                                <div class="col-4 ps-4 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-geo-alt me-2"></i>Destination</label>
                                    <select class="form-control rounded-pill" name="" id="">
                                    <?php
                                        $sql = "SELECT * FROM Destinations";
                                        $stmt = mysqli_stmt_init($conn);
                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                            echo "SQL statement failed";
                                        } else {
                                            mysqli_stmt_execute($stmt);
                                            $result = mysqli_stmt_get_result($stmt);
                        
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '
                                                <option>' . $row["name"] . '</option>
                                                ';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-3 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-calendar-check me-2"></i>Check
                                        in</label>
                                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control rounded-pill" placeholder="Check in" aria-label="Check in">
                                </div>
                                <div class="col-3 text-dark text-start">
                                    <label for="" class="form-label ps-2"><i class="bi bi-calendar-minus me-2"></i>Check
                                        out</label>
                                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control rounded-pill" placeholder="Check out" aria-label="Check out">
                                </div>
                                <div class="col-2">
                                    <a href="listings.php" class="btn btn-secondary rounded-pill px-xxl-4 py-xxl-2 my-3">SEARCH</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>

    </section>
    <!-- home section END -->

    <!-- top destinations START -->
    <section class="container my-5 pb-5">
        <div class="mb-5 text-center">
            <h1 class="fw-bolder">Top Destinations</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">

                <?php

                $sql = "SELECT * FROM Destinations
                INNER JOIN Tours ON Destinations.name = Tours.destination
                INNER JOIN Bookings ON Tours.id = Bookings.tour_id GROUP BY Bookings.tour_id ORDER BY COUNT(Bookings.tour_id) DESC LIMIT 4";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed";
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-lg-3">
                        <div class="img-wrapper rounded-circle m-5">
                            <img class="mw-100" src=' . $row["picture"] . ' alt="">
                        </div>
                        <h4>' . $row["name"] . '</h4>
                        ';
                        $name = $row["name"];
                        $sql1 = "SELECT COUNT(tours.id) as total_tours FROM destinations INNER JOIN tours ON destinations.name = tours.destination WHERE destinations.name = '$name'";
                        if ($result1 = mysqli_query($conn, $sql1)) {
                            $row1 = mysqli_fetch_assoc($result1);
                            echo '
                            <p>' . $row1['total_tours'] . ' tours</p>';
                        }
                        echo '
                        </div>';
                    }
                }

                ?>

            </div>
        </div>
    </section>
    <!-- top destinations END -->

    <!-- promotional banner START-->
    <section class="container my-5">
        <div class="bg-image text-light div-rounded " style="background-image: url('images/TravelBannerSmall.jpg'); height: 25vh; width: auto; opacity: 0.9; ">
            <div class="container">
                <div class="d-flex p-5 justify-content-around">
                    <div class="d-flex flex-column">
                        <h2 class="fw-bolder text-danger pt-1">Sale up for new year</h2>
                        <p class="text-dark">Curabitur blandit tempus</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-danger rounded-pill border border-4 py-2 px-5">Explore</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promotional banner END-->

    <!-- popular tours START -->

    <section class="container pt-5 my-5">
        <div class="mb-5 text-center">
            <h1 class="fw-bolder pb-5">Popular Tours</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">

                <?php

                $sql = "SELECT * FROM Tours INNER JOIN Bookings ON Tours.id = Bookings.tour_id GROUP BY Bookings.tour_id ORDER BY COUNT(Bookings.tour_id) DESC LIMIT 4";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed";
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-lg-3 mb-5">
                            <a href = "tours.php?id=' . $row["tour_id"] . '" style = "color: inherit; text-decoration: inherit;">
                            <div class="card h-100 div-rounded" style="width: auto;">
                                <div class="img-wrapper div-rounded-top">
                                    <img src=' . $row["title_img"] . ' class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                                    <h5 class="card-title fw-bolder mb-3">' . $row["title"] . '</h5>
                                    <p class="text-muted mb-5"><i class="bi bi-star-fill text-warning me-2"></i><span class="text-dark fw-bolder">' . $row["ratings"] . ' </span>(' . $row["total_ratings"] . ' reviews)</p>
                                    <div class="card-footer bg-white pt-4 pb-0">
                                        <div class="row">
                                            <div class="col-6 m-0 p-0">
                                                <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$' . $row["price"] . '
                                                </h6>
                                            </div>
                                            <div class="col-6 text-end m-0 p-0">
                                                <p class="text-muted"><i class="bi bi-clock me-2"></i>' . $row["duration"] . ' days</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        ';
                    }
                }

                ?>



                <!-- <div class="col-lg-3 mb-5">
                    <div class="card h-100 div-rounded" style="width: auto;">
                        <div class="img-wrapper div-rounded-top">
                            <img src="images/sanfran-450x300.jpg" class="card-img-top" alt="...">
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
                </div> -->

                <!-- <div class="col-lg-3 mb-5">
                    <div class="card h-100">
                        <div class="img-wrapper">
                            <img src="images/sanfran-450x300 (1).jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body pb-0">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>New York</h6>
                            <h5 class="card-title fw-bolder mb-3">American Parks Trail end Rapid City Express</h5>
                            <p class="text-muted"><i class="bi bi-star-fill text-warning me-2"></i><span
                                    class="text-dark fw-bolder">5 </span>(3 reviews)</p>
                        </div>
                        <div class="card-footer bg-white pt-4 pb-0">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$100,00
                                    </h6>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="text-muted"><i class="bi bi-clock me-2"></i>10 hours</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->

                <!-- <div class="col-lg-3 mb-5">
                    <div class="card h-100 div-rounded" style="width: auto;">
                        <div class="img-wrapper div-rounded-top">
                            <img src="images/calfor-450x300.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>California</h6>
                            <h5 class="card-title fw-bolder mb-3">Cannes and Antibes Night Tour the Seine Extraordinaire
                            </h5>
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
                </div> -->

                <!-- <div class="col-lg-3 mb-5">
                    <div class="card h-100">
                        <div class="img-wrapper">
                            <img src="images/calfor-450x300.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body pb-0">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>New York</h6>
                            <h5 class="card-title fw-bolder mb-3">Cannes and Antibes Night Tour the Seine Extraordinaire
                            </h5>
                            <p class="text-muted"><i class="bi bi-star-fill text-warning me-2"></i><span
                                    class="text-dark fw-bolder">5 </span>(3 reviews)</p>
                        </div>
                        <div class="card-footer bg-white pt-4 pb-0">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$100,00
                                    </h6>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="text-muted"><i class="bi bi-clock me-2"></i>10 hours</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->

                <!-- <div class="col-lg-3 mb-5">
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
                </div> -->

                <!-- <div class="col-lg-3 mb-5">
                    <div class="card h-100">
                        <div class="img-wrapper">
                            <img src="images/newj-450x300.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body pb-0">
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>New York</h6>
                            <h5 class="card-title fw-bolder mb-3">Giverny and Versailles Small Group Day Trip</h5>
                            <p class="text-muted"><i class="bi bi-star-fill text-warning me-2"></i><span
                                    class="text-dark fw-bolder">5 </span>(3 reviews)</p>
                        </div>
                        <div class="card-footer bg-white pt-4 pb-0">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-dark fw-bolder"><span class="text-muted me-2">From</span>$100,00
                                    </h6>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="text-muted"><i class="bi bi-clock me-2"></i>10 hours</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->

            </div>

        </div>
    </section>
    <!-- popular tours END -->

    <!-- promotional banner START-->
    <section>
        <div class="bg-image p-5 text-light" style="background-image: url('images/shutterstockRF_edited.png'); height: 50vh; width: auto; opacity: 0.9; ">
            <div class="container">
                <div class="d-flex align-items-center align-content-center flex-column">
                    <h2 class="fw-bolder text-danger pt-1">Enjoy your holiday</h2>
                    <p class="text-dark">Curabitur blandit tempus porttitor</p>
                    <button class="btn btn-danger rounded-pill border border-4 px-5">Explore</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row justify-content-center px-5 pt-5 pb-3">

                <div class="col-md-4 pt-2">
                    <div class="d-flex justify-content-center pb-3">
                        <div class="me-4">
                            <img src="images/icon_global.svg" alt="">
                        </div>
                        <div>
                            <h5>BEST SELECTION</h5>
                            <p class="text-muted">Morbi semper fames lobortis <br> ac hac penatibus</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pt-2">
                    <div class="d-flex justify-content-center pb-3">
                        <div class="me-4">
                            <img src="images/icon_price.svg" alt="">
                        </div>
                        <div>
                            <h5>BEST PRICE GUARANTEE</h5>
                            <p class="text-muted">Morbi semper fames lobortis <br> ac hac penatibus</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pt-2">
                    <div class="d-flex justify-content-center pb-3">
                        <div class="me-4">
                            <img src="images/icon_support.svg" alt="">
                        </div>
                        <div>
                            <h5>24/7 SUPPORT</h5>
                            <p class="text-muted">Morbi semper fames lobortis <br> ac hac penatibus</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- promotional banner END-->

    <!-- user review section START -->
    <!-- user review section END -->

    <!-- recently added tours START -->
    <!-- recently added tours END -->

    <!-- top activity START -->
    <!-- top activity END -->

    <!-- newsletter START -->
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
    <!-- newsletter END -->

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>