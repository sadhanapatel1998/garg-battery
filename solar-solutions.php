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
                <h1 class="text-white mb-2">Solar Solutions</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href="">Solar Solutions</a></li>
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
                    Advanced Solar Power Solutions
                </h2>

                <p>
                    Reliable and energy-efficient solar solutions for homes, offices, shops, industries, and commercial spaces designed to reduce electricity costs and provide sustainable power backup.
                </p>

            </div>

            <div class="section-body">

                <div class="service-info">

                    <div class="row gx-lg-5 gy-5">

                        <!-- Left Content -->
                        <div class="col-lg-8">

                            <img src="assets/images/services/solar-solutions.jpg"
                                alt="service image"
                                class="w-100 rounded2 mb-4">

                            <div class="service-info-left">

                                <!-- About Service -->
                                <div class="about-service mb-6">

                                    <h4 class="mb-2">
                                        About the Service
                                    </h4>

                                    <p class="mb-3">
                                        Garg Enterprises provides high-quality solar solutions designed to deliver clean, efficient, and cost-effective energy for residential and commercial applications. Our solar systems help customers reduce electricity bills while ensuring dependable power generation throughout the year.
                                    </p>

                                    <p class="mb-4">
                                        We offer complete solar power solutions including solar panels, solar inverters, solar batteries, and backup systems suitable for homes, offices, shops, factories, and commercial buildings. Our expert team helps customers select the right solar setup according to their energy consumption and power requirements.
                                    </p>

                                    <ul class="list-unstyled">

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Energy-efficient solar systems for homes and businesses
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            High-quality solar panels and inverter solutions
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Reliable solar batteries for long-lasting backup
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Professional installation and maintenance support
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Sustainable and eco-friendly energy solutions
                                        </li>

                                    </ul>

                                </div>

                                <!-- Benefits -->
                                <div class="service-benefit">

                                    <h4 class="mb-4">
                                        Benefits of Solar Solutions
                                    </h4>

                                    <p class="mb-3">
                                        Solar power systems help reduce dependency on traditional electricity while providing long-term savings on energy bills. They generate clean and renewable energy that supports environmentally friendly living and sustainable business operations.
                                    </p>

                                    <p class="mb-3">
                                        Modern solar solutions are designed for high efficiency, low maintenance, and reliable performance in all weather conditions. Solar backup systems also ensure uninterrupted power supply during electricity failures and voltage fluctuations.
                                    </p>

                                    <p>
                                        At Garg Enterprises, we are committed to delivering dependable solar solutions with genuine products, expert consultation, affordable pricing, and dedicated customer support. Our team ensures smooth installation and reliable after-sales service for complete customer satisfaction.
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