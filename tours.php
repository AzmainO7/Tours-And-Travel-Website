<?php

include 'config.php';

?>

<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'nav_bar.php'; ?>

    <!-- tour header START -->
    <div class="container mt-4 mb-5">
        <?php

        $id = $_GET["id"];
        // $id = 2; 
        $sql = "SELECT * FROM Tours WHERE id = $id";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="row justify-content-center">
                <div class="col-lg-9 pe-lg-5" style="padding-top: 90px;">
    
                    <!-- tour images START -->
                    <div class="bg-light mb-5">
    
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                ';
                if ($row["image_3"] != null) {
                    echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    ';
                }

                if ($row["image_4"] != null) {
                    echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                    ';
                }

                if ($row["image_5"] != null) {
                    echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
                                    ';
                }
                echo '  
                                
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src=' . $row["image_1"] . ' class="d-block mx-auto mw-100" style="height: 65vh;" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src=' . $row["image_2"] . ' class="d-block mx-auto mw-100" style="height: 65vh;" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                    </div>
                                </div>
                                ';
                if ($row["image_3"] != null) {
                    echo '
                    <div class="carousel-item">
                        <img src=' . $row["image_3"] . ' class="img-fluid px-0" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div> 
                    ';
                }

                if ($row["image_4"] != null) {
                    echo '
                    <div class="carousel-item">
                        <img src=' . $row["image_4"] . ' class="d-block mx-auto mw-100" style="height: 65vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    ';
                }
                if ($row["image_5"] != null) {
                    echo '
                    <div class="carousel-item">
                        <img src=' . $row["image_5"] . ' class="d-block mx-auto mw-100" style="height: 65vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    ';
                }

                echo '
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
    
                    </div>
                    <!-- tour images END -->
    
                    ';

                if ($row["ratings"] >= 1 && $row["ratings"] < 2) {
                    echo '
                        <div class="row justify-content-center">
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">' . $row["title"] . '</h2>
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                        </div>
                        <div class="col-4 text-end">
                            <h6 class="mb-2">Excellent</h6>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning"></i>
                            <h6 class="mt-2">from 3 reviews</h6>
                        </div>
                    </div>    
                    <hr>
                    ';
                } else if ($row["ratings"] >= 2 && $row["ratings"] < 3) {
                    echo '
                        <div class="row justify-content-center">
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">' . $row["title"] . '</h2>
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                        </div>
                        <div class="col-4 text-end">
                            <h6 class="mb-2">Excellent</h6>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning"></i>
                            <h6 class="mt-2">from 3 reviews</h6>
                        </div>
                    </div>    
                    <hr>
                    ';
                } else if ($row["ratings"] >= 3 && $row["ratings"] < 4) {
                    echo '
                        <div class="row justify-content-center">
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">' . $row["title"] . '</h2>
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                        </div>
                        <div class="col-4 text-end">
                            <h6 class="mb-2">Excellent</h6>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning"></i>
                            <h6 class="mt-2">from 3 reviews</h6>
                        </div>
                    </div>    
                    <hr>
                    ';
                } else if ($row["ratings"] >= 4 && $row["ratings"] < 5) {
                    echo '
                        <div class="row justify-content-center">
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">' . $row["title"] . '</h2>
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                        </div>
                        <div class="col-4 text-end">
                            <h6 class="mb-2">Excellent</h6>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star text-warning"></i>
                            <h6 class="mt-2">from 3 reviews</h6>
                        </div>
                    </div>    
                    <hr>
                    ';
                } else if ($row["ratings"] == 5) {
                    echo '
                        <div class="row justify-content-center">
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">' . $row["title"] . '</h2>
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                        </div>
                        <div class="col-4 text-end">
                            <h6 class="mb-2">Excellent</h6>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <h6 class="mt-2">from 3 reviews</h6>
                        </div>
                    </div>    
                    <hr>
                    ';
                } else if ($row["ratings"] > 1 && $row["ratings"] < 2) {
                    echo '
                        <div class="row justify-content-center">
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">' . $row["title"] . '</h2>
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                        </div>
                        <div class="col-4 text-end">
                            <h6 class="mb-2">Excellent</h6>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning"></i>
                            <h6 class="mt-2">from 3 reviews</h6>
                        </div>
                    </div>    
                    <hr>
                    ';
                } else {
                    echo '
                        <div class="row justify-content-center">
                        <div class="col-8">
                            <h2 class="fw-bold mb-3">' . $row["title"] . '</h2>
                            <h6 class="text-muted"><i class="bi bi-geo-alt me-2"></i>' . $row["destination"] . '</h6>
                        </div>
                        <div class="col-4 text-end">
                            <h6 class="mb-2">Excellent</h6>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning me-1"></i>
                            <i class="bi bi-star text-warning"></i>
                            <h6 class="mt-2">from 0 reviews</h6>
                        </div>
                    </div>    
                    <hr>
                    ';
                }

                echo '
                    <div class="row justify-content-center pt-2 px-2">
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-start pb-2">
                                <div class="me-3">
                                    <i class="bi bi-clock fs-3 text-danger"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Duration</h6>
                                    <p class="text-muted  pb-0 mb-0">' . $row["duration"] . ' days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-start pb-2">
                                <div class="me-3">
                                    <i class="bi bi-bookmark-star fs-3 text-danger"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Tour Type</h6>
                                    <p class="text-muted pb-0 mb-0">Daily Tour</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-start pb-2">
                                <div class="me-3">
                                    <i class="bi bi-people fs-3 text-danger"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Group Size</h6>
                                    <p class="text-muted pb-0 mb-0">10 people</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-start pb-2">
                                <div class="me-3">
                                    <i class="bi bi-translate fs-3 text-danger"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Languages</h6>
                                    <p class="text-muted pb-0 mb-0">English, Japanese</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <hr>
    
                    <!-- tour overview START -->
                    <div>
                        <h3 class="py-3">Overview</h3>
                        <p class="text-muted pb-3">' . $row["overview"] . '</p>
                        <h6>HIGHLIGHTS</h6>
                        <ul class="list-group ms-5 mt-4 text-muted">
                            <li class="mb-3">' . $row["highlights_1"] . '</li>
                            ';
                if ($row["highlights_2"] != null) {
                    echo '
                                <li class="mb-3">' . $row["highlights_2"] . '</li>
                                ';
                }
                if ($row["highlights_2"] != null) {
                    echo '
                                <li class="mb-3">' . $row["highlights_3"] . '</li>
                                ';
                }
                echo '                             
                        </ul>
                    </div>
                    <!-- tour overview END -->
    
                    <hr>
    
                    <!-- Itinerary START -->
                    <div class="mb-5">
                        <h3 class="py-3">Itinerary</h3>
                        <div class="accordion" id="accordionFlushExample">
    
                            <div class="accordion-item my-2">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        <i class="bi bi-calendar-date text-danger fs-5 me-3"></i><span class="fw-bold fs-6">Day 1: <span>' . $row["itn_day1"] . '</span></span>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body text-muted fs-6">
    
                                        <div class="d-flex justify-content-start p-2">
                                            <div class="img-wrapper">
                                                <img src="images/Day 1.jpg" class="mw-100" alt="">
                                            </div>
                                            <div>
                                                <p class="ps-4">From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of The City. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception</p>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
    
                            <div class="accordion-item my-2">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <i class="bi bi-calendar-date text-danger fs-5 me-3"></i><span class="fw-bold fs-6">Day 2: <span>' . $row["itn_day2"] . '</span></span>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body text-muted fs-6">
                                    <div class="d-flex justify-content-start p-2">
                                    <div class="img-wrapper">
                                        <img src="images/Day 1.jpg" class="mw-100" alt="">
                                    </div>
                                    <div>
                                        <p class="ps-4">From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of The City. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception</p>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
    
                            ';
                if ($row["itn_day3"] != null) {
                    echo '
                                <div class="accordion-item my-2">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <i class="bi bi-calendar-date text-danger fs-5 me-3"></i><span class="fw-bold fs-6">Day 3: <span>' . $row["itn_day3"] . '</span></span>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body text-muted fs-6">
                                        <div class="d-flex justify-content-center p-2">
                                            <div class="img-wrapper">
                                                <img src="images/Day 3.jpg" class="mw-100" alt="">
                                            </div>
                                            <div>
                                                <p class="ps-4">From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of The City. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                }

                if ($row["itn_day4"] != null) {
                    echo '
                                <div class="accordion-item my-2">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <i class="bi bi-calendar-date text-danger fs-5 me-3"></i><span class="fw-bold fs-6">Day 4: <span>' . $row["itn_day4"] . '</span></span>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body text-muted fs-6">
                                        <div class="d-flex justify-content-center p-2">
                                            <div class="img-wrapper">
                                                <img src="images/Day 4.jpg" class="mw-100" alt="">
                                            </div>
                                            <div>
                                                <p class="ps-4">From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of The City. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                }
                if ($row["itn_day5"] != null) {
                    echo '
                                <div class="accordion-item my-2">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <i class="bi bi-calendar-date text-danger fs-5 me-3"></i><span class="fw-bold fs-6">Day 5: <span>' . $row["itn_day5"] . '</span></span>
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body text-muted fs-6">
                                        <div class="d-flex justify-content-center p-2">
                                            <div class="img-wrapper">
                                                <img src="images/Day 5.jpg" class="mw-100" alt="">
                                            </div>
                                            <div>
                                                <p class="ps-4">From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of The City. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                }
                echo '
    
                        </div>
                    </div>
                    <!-- Itinerary END -->
    
                    <hr>
    
                    <!-- Included START -->
                    <div>
                        <h3 class="py-3">Included/Excluded</h3>
                        <div class="row justify-content-between pb-4">
                            <div class="col-6">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item list-group-item-action list-group-item-success">' . $row["included_1"] . '</li>
                                    ';
                if ($row["included_2"] != null) {
                    echo '
                                        <li class="list-group-item list-group-item-action list-group-item-success">' . $row["included_2"] . '</li>
                                        ';
                }
                if ($row["included_3"] != null) {
                    echo '
                                        <li class="list-group-item list-group-item-action list-group-item-success">' . $row["included_3"] . '</li>
                                        ';
                }
                echo '                                           
                                </ol>
                            </div>
                            <div class="col-6">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item list-group-item-action list-group-item-danger">' . $row["excluded_1"] . '</li>
                                    ';
                if ($row["excluded_2"] != null) {
                    echo '
                                        <li class="list-group-item list-group-item-action list-group-item-danger">' . $row["excluded_2"] . '</li>
                                        ';
                }
                if ($row["excluded_3"] != null) {
                    echo '
                                        <li class="list-group-item list-group-item-action list-group-item-danger">' . $row["excluded_3"] . '</li>
                                        ';
                }
                echo '  
                                    
                                </ol>
                            </div>
                        </div>
    
                    </div>
                    <!-- Included END -->
    
                    <hr>
    
                    <!-- location START -->
                    <div class="mb-5">
                        <h3 class="py-3">Tour Location</h3>
                        <div>
                            <div id="googleMap" style="width:100%; height:450px;"></div>
                            <script>
                                function myMap() {
                                    var mapProp = {
                                        center: new google.maps.LatLng(' . $row["location"] . '),
                                        zoom: 14,
                                    };
                                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                                }
                            </script>
    
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-Wd5NAD1Ye1ZZbCPKXlhMTKFkhxQFicQ&callback=myMap"></script>
                        </div>
                    </div>
                    <!-- location END -->
    
                    <hr>
    
                    <!-- FAQs START -->
                    <div>
                        <h3 class="py-3">FAQs</h3>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item py-2">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold fs-6">' . $row["faq_1"] . '</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-muted fs-6">Your tour will conclude in San Francisco on
                                        Day 8 of the
                                        trip. There are no activities planned for this day so youre free to depart at any
                                        time. We
                                        highly recommend booking post-accommodation to give yourself time to fully
                                        experience the
                                        wonders of this iconic city!</div>
                                </div>
                            </div>
    
                            ';
                if ($row["faq_2"] != null) {
                    echo '
                             <div class="accordion-item py-2">
                             <h2 class="accordion-header" id="flush-headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                                     <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold fs-6">' . $row["faq_2"] . '</span>
                                 </button>
                             </h2>
                             <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                 <div class="accordion-body text-muted fs-6">Airport transfers are not included in the
                                     price of this
                                     tour, however you can book for an arrival transfer in advance. In this case a tour
                                     operator
                                     representative will be at the airport to greet you. To arrange this please contact
                                     our customer
                                     service team once you have a confirmed booking.</div>
                             </div>
                         </div>      
                                ';
                }

                if ($row["faq_3"] != null) {
                    echo '
                    <div class="accordion-item py-2">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                            <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold fs-6">' . $row["faq_3"] . '</span>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body text-muted fs-6">Your tour will conclude in San Francisco on
                            Day 8 of the
                            trip. There are  activities planned  this day so youre free to depart at any
                            time. We
                            highly recommend booking post-accommodation to give yourself time to fully
                            experience the
                            wonders of this iconic city!</div>
                    </div>
                </div>      
                                ';
                }
                echo '
                            
    
                            
    
                        </div>
                    </div>
                    <!-- FAQs END -->
    
                    <hr>
    
                    <!-- reviews START -->
                    <div class="mb-5">
                        <h3 class="pt-3 pb-4">Reviews</h3>
                        <div class="bg-light div-rounded">
                            <div class="row justify-content-between">
    
                                <div class="col-lg-5 text-center p-5 border-end">
                                    <h5 class="text-danger pt-4"><span class="fw-bold fs-1">' . $row["ratings"] . '</span>/5</h5>
                                    <h5>Excellent</h5>
                                    <p class="text-muted">Based on <span class="text-danger">3 reviews</span></p>
                                </div>
    
                                <div class="col-lg-7 p-5 text-end">
                                    <div class="row">
                                        <div class="col-3">
                                            <h6>Excellent</h6>
                                        </div>
                                        <div class="col-9">
                                            <div class="progress mb-4 me-5" style="height: 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-3">
                                            <h6>Very Good</h6>
                                        </div>
                                        <div class="col-9">
                                            <div class="progress mb-4 me-5" style="height: 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-3">
                                            <h6>Average</h6>
                                        </div>
                                        <div class="col-9">
                                            <div class="progress mb-4 me-5" style="height: 10px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-3">
                                            <h6>Poor</h6>
                                        </div>
                                        <div class="col-9">
                                            <div class="progress mb-4 me-5" style="height: 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-3">
                                            <h6>Terrible</h6>
                                        </div>
                                        <div class="col-9">
                                            <div class="progress mb-4 me-5" style="height: 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
    
                        <div class="text-center">
                            <a href="#" class="btn btn-danger mt-5 mb-2 px-5">Review</a>
                        </div>
    
    
                    </div>
                    <!-- reviews END -->
    
                    <hr>
    
    
                </div>
    
                <!-- booking form START -->
                <div class="col-lg-3 px-0">
                    <div class="sticky-top" style="padding-top: 90px;">
                        <div class="border border-danger">
                        <h5 class="p-4 bg-danger text-light">from<span class="fw-bold fs-3 ms-2">$' . $row["price"] . '</span></h5>
                            <form action="private_checkout.php" method="GET">
                            <input type="hidden" value="' . $row["id"] . '" class="form-control" name="id"> 
                            <input type="hidden" value="' . $row["title"] . '" class="form-control" name="title">
                            <input type="hidden" value="' . $row["destination"] . '" class="form-control" name="destination"> 
                            <input type="hidden" value="' . $row["price"] . '" class="form-control" name="price">
                            <input type="hidden" value="' . $row["duration"] . '" class="form-control" name="duration">
                                <div class="row mb-3 mx-4">
                                    <label class="pt-2 ps-1 mb-2" for="date">Date</label>
                                    <input type="date" value="';
                echo date("Y-m-d");
                echo '" class="form-control" id="date" name="date" placeholder="" aria-label="Check out" required>
                                </div>
                                <div class="row mb-3 mx-4">
                                    <label class="pt-2 ps-1 mb-2" for="number1">Adults (Age 18+) </label>
                                    <input type="number" value="1" min="1" max="5" class="form-control " id="adult" name="adult" placeholder="" aria-label="Check out" required>
                                </div>
                                <div class="row mb-3 mx-4">
                                    <label class="pt-2 ps-1 mb-2" for="number2">Children (Age 6-17) </label>
                                    <input type="number" value="0" min="0" max="5" class="form-control " id="children" name="children" placeholder="" aria-label="Check out" required>
                                </div>
                                <div class="row mb-3 mx-4">
                                    <label class="pt-2 ps-1 mb-2" for="number3">Infant (Age 0-5) </label>
                                    <input type="number" value="0" min="0" max="5" class="form-control " id="infant" name="infant" placeholder="" aria-label="Check out" required>
                                </div>
                                <div class="text-center mt-4 mb-4 mx-4">
                                ';
                session_start();

                if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                    echo '
                                    <button type="submit" id="submit" class="btn btn-danger w-100">BOOK NOW</button>                      
                                    ';
                } else {
                    echo '
                                    <a href="" data-bs-toggle="modal" data-bs-target="#loginModal" data-backdrop="static" type="submit" class="btn btn-danger w-100">BOOK NOW</a>
                                    ';
                }
                echo '
                                </div>
                            </form>
                        </div>
                    </div>
    
                </div>
                <!-- booking form END -->
    
            </div>';
            }
        }

        ?>

        <!--Echo Start -->

        <!--Echo End -->
    </div>
    <!-- tour header END -->

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>