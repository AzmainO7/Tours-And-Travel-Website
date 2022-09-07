<?php

include 'config.php';

?>

<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'nav_bar.php'; ?>

    <!--listing calender -->
    <section class="container mb-5" style="margin-top: 80px;">

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
                        </div>';
                        }
                    }
                }

                ?>

            </div>

        </div>

    </section>

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>