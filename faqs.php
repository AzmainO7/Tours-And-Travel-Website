<?php

include 'config.php';

?>

<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'nav_bar.php'; ?>
    
    <!-- FAQs START -->
    <div class="container mb-5 pb-5 pt-5" style="margin-top: 75px;">
        <div>
            <div class="mb-5 pb-3 text-center">
                <h1 class="fw-bold">Frequently Asked Questions</h1>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">When and where does
                            the tour
                            end?</span>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Your tour will conclude in San Francisco on Day 8 of the
                        trip. There are no activities planned for this day so you're free to depart at any time. We
                        highly recommend booking post-accommodation to give yourself time to fully experience the
                        wonders of this iconic city!</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">Do you arrange airport
                            transfers?</span>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Airport transfers are not included in the price of this
                        tour, however you can book for an arrival transfer in advance. In this case a tour operator
                        representative will be at the airport to greet you. To arrange this please contact our customer
                        service team once you have a confirmed booking.</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">When and where does
                            the tour
                            end?</span>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Your tour will conclude in San Francisco on Day 8 of the
                        trip. There are no activities planned for this day so you're free to depart at any time. We
                        highly recommend booking post-accommodation to give yourself time to fully experience the
                        wonders of this iconic city!</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">Do you arrange airport
                            transfers?</span>
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Airport transfers are not included in the price of this
                        tour, however you can book for an arrival transfer in advance. In this case a tour operator
                        representative will be at the airport to greet you. To arrange this please contact our customer
                        service team once you have a confirmed booking.</div>
                </div>
            </div>

            <div class="accordion-item py-2">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle text-danger fs-5 me-3"></i><span class="fw-bold text-danger fs-4">When and where does
                            the tour
                            end?</span>
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body text-muted fs-5">Your tour will conclude in San Francisco on Day 8 of the
                        trip. There are no activities planned for this day so you're free to depart at any time. We
                        highly recommend booking post-accommodation to give yourself time to fully experience the
                        wonders of this iconic city!</div>
                </div>
            </div>

        </div>
    </div>
    <!-- FAQs END -->

    <!-- footer START -->
    <?php require_once 'footer.php' ?>
    <!-- footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>