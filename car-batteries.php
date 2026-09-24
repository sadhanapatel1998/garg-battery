<?php
ob_start();
include('include/data.php');
?>
<!-- Banner Section Starts -->
<section class="banner breadcrumb mb-0 position-relative rounded3 rounded-top-0">
    <div class="overlay rounded3 rounded-top-0"></div>

    <div class="container position-relative">

        <div class="banner-inner pt-0 w-lg-75 m-auto text-center text-white">

            <div class="section-title mb-2">

                <h1 class="text-white mb-2">
                    Car Batteries
                </h1>

                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>

                    <li class="mx-4">
                        <i class="fa fa-star-o green" aria-hidden="true"></i>
                    </li>

                    <li><a href="">Car Batteries</a></li>
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
                    Automotive Battery Solutions
                </h2>

                <p>
                    High-performance automotive batteries for cars, bikes, trucks, tractors, buses, commercial vehicles, and all types of vehicles with reliable starting power and long-lasting performance.
                </p>

            </div>

            <div class="section-body">

                <div class="service-info">

                    <div class="row gx-lg-5 gy-5">

                        <!-- Left Content -->
                        <div class="col-lg-8">

                            <img src="assets/images/services/car-batteries.jpg"
                                alt="service image"
                                class="w-100 rounded2 mb-4">

                            <div class="service-info-left">

                                <!-- About Service -->
                                <div class="about-service mb-6">

                                    <h4 class="mb-2">
                                        About the Service
                                    </h4>

                                    <p class="mb-3">
                                        Garg Enterprises provides premium-quality automotive batteries designed to deliver reliable performance, powerful starting support, and long battery life for all types of vehicles. We offer batteries suitable for daily commuting vehicles as well as heavy commercial applications.
                                    </p>

                                    <p class="mb-4">
                                        Our wide range of vehicle batteries includes solutions for cars, bikes, scooters, trucks, buses, tractors, auto-rickshaws, commercial vehicles, and industrial transport vehicles. We deal in trusted brands like Exide, Amaron, SF Batteries, Luminous, and more to ensure quality and dependable performance for every customer.
                                    </p>

                                    <ul class="list-unstyled">

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Batteries for cars, bikes, trucks, buses, and tractors
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            High cranking power for smooth vehicle starting
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Long-lasting battery performance with low maintenance
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Genuine automotive batteries from trusted brands
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Fast battery replacement and installation support
                                        </li>

                                    </ul>

                                </div>

                                <!-- Benefits -->
                                <div class="service-benefit">

                                    <h4 class="mb-4">
                                        Benefits of Automotive Batteries
                                    </h4>

                                    <p class="mb-3">
                                        Automotive batteries play an essential role in delivering smooth engine starting, powering electrical systems, and maintaining vehicle performance. High-quality batteries ensure reliable ignition, stable voltage supply, and dependable operation even in challenging weather conditions.
                                    </p>

                                    <p class="mb-3">
                                        Our vehicle batteries are designed with advanced technology for better durability, faster charging, corrosion resistance, and long service life. Whether for personal vehicles or commercial fleets, we provide efficient battery solutions tailored to different vehicle requirements.
                                    </p>

                                    <p>
                                        At Garg Enterprises, we focus on providing customers with genuine products, expert recommendations, affordable pricing, and dependable after-sales support. Our experienced team ensures quick installation and hassle-free battery replacement services for all vehicle types.
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