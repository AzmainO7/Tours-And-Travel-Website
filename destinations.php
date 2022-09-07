<?php

include 'config.php';

?>

<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'nav_bar.php'; ?>

    <!-- popular tours START -->
    <section class="container pt-4 my-5">
        <div class="mb-2 text-center">
            <h1 class="fw-bolder pb-3">United States</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">

                <?php

                $sql = "SELECT * FROM Destinations";
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