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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>

    <!--listing calender -->
    <section class="container mb-5" style="margin-top: 130px;">

        <div class="">
            <form class="d-flex bg-light p-3 div-rounded justify-content-evenly text-center" action="" method="POST">

                <div class="text-dark">
                    <label for="" class="form-label"><i class="bi bi-geo-alt me-2"></i>Destination</label>
                    <select class="form-control div-rounded-less px-5" name="destinations" id="destinations">
                        <option value="" selected>Select Destination</option>
                        <option>New York</option>
                        <option>San Francisco</option>
                        <option>California</option>
                        <option>New Jersey</option>
                    </select>
                </div>

                <div class="text-dark">
                    <label for="" class="form-label"><i class="bi bi-calendar-check me-2"></i>Check
                        in</label>
                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control div-rounded-less px-5" placeholder="Check in" aria-label="Check in">
                </div>

                <div class="text-dark">
                    <label for="" class="form-label"><i class="bi bi-calendar-minus me-2"></i>Check
                        out</label>
                    <input type="date" value="<?php echo date("Y-m-d"); ?>" class="form-control div-rounded-less px-5" placeholder="Check out" aria-label="Check out">
                </div>

                <div class="d-flex align-items-center">
                    <button name="search" class="btn btn-secondary div-rounded-less text-end px-5 py-2">SEARCH</button>
                </div>

            </form>
        </div>

    </section>


    <!-- cards -->

    <section class="container pt-5 my-5">

        <div class="container">
            <div class="row justify-content-start">
                <?php

                if (isset($_POST['search'])) {
                    if (!empty($_POST['destinations'])) {
                        $selected = $_POST['destinations'];
                        $sql = "SELECT * FROM Tours WHERE destination = '$selected' AND active = 1";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed";
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-lg-3 mb-5">
                        <a href = "tours.php?id=' . $row["id"] . '" style = "color: inherit; text-decoration: inherit;">
                        <div class="card h-100 div-rounded" style="width: auto;">
                            <div class="img-wrapper div-rounded-top">
                                <img src=' . $row["title_img"] . ' class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                                <h5 class="card-title fw-bolder mb-3">' . $row["title"] . '</h5>
                                <p class="text-muted mb-5"><i class="bi bi-star-fill text-warning me-2"></i><span class="text-dark fw-bolder">' . $row["ratings"] . ' </span>(3 reviews)</p>
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
                    </div>';
                            }
                        }
                    }
                } else {
                    $sql = "SELECT * FROM Tours WHERE active = 1";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-lg-3 mb-5">
                            <a href = "tours.php?id=' . $row["id"] . '" style = "color: inherit; text-decoration: inherit;">
                            <div class="card h-100 div-rounded" style="width: auto;">
                                <div class="img-wrapper div-rounded-top">
                                    <img src=' . $row["title_img"] . ' class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                                    <h5 class="card-title fw-bolder mb-3">' . $row["title"] . '</h5>
                                    <p class="text-muted mb-5"><i class="bi bi-star-fill text-warning me-2"></i><span class="text-dark fw-bolder">' . $row["ratings"] . ' </span>(3 reviews)</p>
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
                        </div>';
                        }
                    }
                }

                ?>

            </div>

        </div>

    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>