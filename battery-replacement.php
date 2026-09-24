<?php
ob_start();
include('include/data.php');
?>
<!-- Banner Section Starts -->
<section class="banner breadcrumb mb-0 position-relative rounded3 rounded-top-0">
    <div class="overlay rounded3 rounded-top-0"></div>
    <div class="container position-relative">
        <div class="banner-inner pt-0 w-lg-75 m-auto text-center text-white ">
            <div class="section-title mb-2">
                <h1 class="text-white mb-2"> Battery Replacement</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href=""> Battery Replacement</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends -->

<!-- Service Detail Starts -->
<section class="service-detail py-10">

    <div class="container">

        <div class="service-detail-inner">

            <!-- Section Title -->
            <div class="section-title mb-7 text-center w-lg-60 m-auto">

                <h2 class="mb-1">
                    Fast Battery Replacement Services
                </h2>

                <p>
                    Quick and reliable battery replacement solutions for inverter batteries, car batteries, UPS systems, solar batteries, and all types of vehicle batteries with professional support.
                </p>

            </div>

            <div class="section-body">

                <div class="service-info">

                    <div class="row gx-lg-5 gy-5">

                        <!-- Left Content -->
                        <div class="col-lg-8">

                            <img src="assets/images/services/battery-replacement.jpg"
                                alt="service image"
                                class="w-100 rounded2 mb-4">

                            <div class="service-info-left">

                                <!-- About Service -->
                                <div class="about-service mb-6">

                                    <h4 class="mb-2">
                                        About the Service
                                    </h4>

                                    <p class="mb-3">
                                        Garg Enterprises provides professional battery replacement services for homes, offices, commercial spaces, and all types of vehicles. We ensure fast replacement support with genuine products and expert assistance to minimize downtime and maintain uninterrupted performance.
                                    </p>

                                    <p class="mb-4">
                                        Our experienced team offers replacement solutions for inverter batteries, UPS batteries, solar batteries, car batteries, bike batteries, truck batteries, and commercial vehicle batteries. We deal in trusted brands to ensure long-lasting performance, safety, and reliable power backup.
                                    </p>

                                    <ul class="list-unstyled">

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Quick battery replacement for homes and businesses
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Replacement support for all vehicle battery types
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Genuine batteries from trusted leading brands
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Professional installation and technical assistance
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Reliable doorstep support and customer service
                                        </li>

                                    </ul>

                                </div>

                                <!-- Benefits -->
                                <div class="service-benefit">

                                    <h4 class="mb-4">
                                        Benefits of Battery Replacement Services
                                    </h4>

                                    <p class="mb-3">
                                        Timely battery replacement helps maintain smooth operation of electrical systems, vehicles, and backup power equipment. It improves performance, prevents sudden failures, and ensures reliable power availability whenever needed.
                                    </p>

                                    <p class="mb-3">
                                        Our replacement services are designed to provide convenience, safety, and efficiency. We help customers select the right replacement battery according to usage requirements, backup needs, and budget preferences.
                                    </p>

                                    <p>
                                        At Garg Enterprises, customer satisfaction is our priority. We provide dependable battery replacement solutions with expert guidance, affordable pricing, fast installation, and dedicated after-sales support to ensure long-term reliability and performance.
                                    </p>

                                </div>

                            </div>

                        </div>

                        <!-- Sidebar -->
                        <div class="col-lg-4">

                            <?php include('include/service-side.php') ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Service Detail Ends -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>