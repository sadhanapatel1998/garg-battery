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
                <h1 class="text-white mb-2">  Battery Manufacturer</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href=""> Battery Manufacturer</a></li>
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
                    High-Quality Battery Manufacturing Solutions
                </h2>

                <p>
                    Trusted battery manufacturing solutions for inverter batteries, automotive batteries, solar batteries, UPS batteries, and industrial power backup systems with advanced technology and reliable performance.
                </p>

            </div>

            <div class="section-body">

                <div class="service-info">

                    <div class="row gx-lg-5 gy-5">

                        <!-- Left Content -->
                        <div class="col-lg-8">

                            <img src="assets/images/services/battery-manufacturer.jpg"
                                alt="service image"
                                class="w-100 rounded2 mb-4">

                            <div class="service-info-left">

                                <!-- About Service -->
                                <div class="about-service mb-6">

                                    <h4 class="mb-2">
                                        About the Service
                                    </h4>

                                    <p class="mb-3">
                                        Garg Enterprises provides dependable battery manufacturing solutions designed to meet residential, commercial, automotive, and industrial power requirements. Our manufacturing process focuses on quality, performance, durability, and advanced battery technology to ensure reliable power backup and long service life.
                                    </p>

                                    <p class="mb-4">
                                        We manufacture and supply a wide range of batteries including inverter batteries, UPS batteries, solar batteries, automotive batteries, heavy-duty commercial batteries, and industrial batteries. Every product is developed with strict quality standards to deliver efficient performance, safety, and long-lasting reliability.
                                    </p>

                                    <ul class="list-unstyled">

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Advanced battery manufacturing technology
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            High-performance batteries for multiple applications
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Reliable and long-lasting power backup solutions
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Suitable for residential, commercial, and industrial use
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Quality-tested products with dependable support
                                        </li>

                                    </ul>

                                </div>

                                <!-- Benefits -->
                                <div class="service-benefit">

                                    <h4 class="mb-4">
                                        Benefits of Battery Manufacturing Solutions
                                    </h4>

                                    <p class="mb-3">
                                        High-quality battery manufacturing ensures better energy efficiency, reliable backup performance, improved durability, and longer operational life. Advanced manufacturing standards help maintain safety and consistent performance across all battery types.
                                    </p>

                                    <p class="mb-3">
                                        Our manufactured batteries are designed to handle different power requirements efficiently while supporting homes, offices, industries, transportation systems, and commercial operations with uninterrupted energy solutions.
                                    </p>

                                    <p>
                                        At Garg Enterprises, we are committed to delivering trusted battery manufacturing solutions with premium-quality materials, advanced production standards, affordable pricing, and professional customer support. Our goal is to provide durable and dependable battery products that meet every customer requirement effectively.
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