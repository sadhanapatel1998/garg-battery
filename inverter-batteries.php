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
                <h1 class="text-white mb-2">Inverter Batteries</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href="">Inverter Batteries</a></li>
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
                    Inverter Batteries
                </h2>

                <p>
                    High-performance inverter batteries designed to deliver reliable power backup solutions for homes, offices, shops, and commercial spaces.
                </p>

            </div>

            <div class="section-body">

                <div class="service-info">

                    <div class="row gx-lg-5 gy-5">

                        <!-- Left Content -->
                        <div class="col-lg-8">

                            <img src="assets/images/services/inverter-battery.jpg"
                                alt="service image"
                                class="w-100 rounded2 mb-4">

                            <div class="service-info-left">

                                <!-- About Service -->
                                <div class="about-service mb-6">

                                    <h4 class="mb-2">
                                        About the Service
                                    </h4>

                                    <p class="mb-2">
                                        Garg Enterprises provides high-quality inverter batteries that ensure uninterrupted power backup during electricity failures. Our batteries are suitable for residential, commercial, and office use with long-lasting performance and reliable durability.
                                    </p>

                                    <p class="mb-4">
                                        We deal in trusted battery brands including Exide, Luminous, Microtek, Amaron, and SF Batteries. Our expert team helps customers choose the right battery capacity according to their power requirements and usage needs.
                                    </p>

                                    <ul class="list-unstyled">

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Long-lasting power backup solutions
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Genuine inverter batteries from trusted brands
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Suitable for homes, offices, and commercial spaces
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Professional installation and replacement support
                                        </li>

                                    </ul>

                                </div>

                                <!-- Benefits -->
                                <div class="service-benefit">

                                    <h4 class="mb-4">
                                        Benefits of Inverter Batteries
                                    </h4>

                                    <p class="mb-2">
                                        Inverter batteries provide uninterrupted power supply during power cuts and help maintain smooth operation of essential appliances and equipment. They are energy-efficient, reliable, and designed for long backup performance.
                                    </p>

                                    <p>
                                        Our inverter battery solutions are ideal for homes, offices, shops, and businesses looking for dependable power backup systems. With expert support, fast installation, and trusted products, Garg Enterprises ensures complete customer satisfaction and reliable performance.
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