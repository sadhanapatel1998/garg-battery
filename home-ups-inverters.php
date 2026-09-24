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
                    Home UPS & Inverters
                </h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4">
                        <i class="fa fa-star-o green" aria-hidden="true"></i>
                    </li>
                    <li><a href="">Home UPS & Inverters</a></li>
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
                    Home UPS & Inverter Solutions
                </h2>

                <p>
                    Reliable UPS and inverter systems designed to provide uninterrupted power backup for homes, offices, shops, and commercial spaces with long-lasting performance and energy efficiency.
                </p>

            </div>

            <div class="section-body">

                <div class="service-info">

                    <div class="row gx-lg-5 gy-5">

                        <!-- Left Content -->
                        <div class="col-lg-8">

                            <img src="assets/images/services/ups.jpg"
                                alt="service image"
                                class="w-100 rounded2 mb-4">

                            <div class="service-info-left">

                                <!-- About Service -->
                                <div class="about-service mb-6">

                                    <h4 class="mb-2">
                                        About the Service
                                    </h4>

                                    <p class="mb-3">
                                        Garg Enterprises provides advanced Home UPS and inverter solutions that ensure uninterrupted electricity during power cuts and voltage fluctuations. Our systems are designed to deliver smooth and reliable power backup for essential appliances, office equipment, computers, fans, lights, and other electrical devices.
                                    </p>

                                    <p class="mb-4">
                                        We offer a wide range of UPS and inverter systems from trusted brands like Exide, Luminous, Microtek, and more. Whether you need a compact inverter for home use or a heavy-duty power backup solution for commercial requirements, our team helps you select the right system according to your power consumption and backup needs.
                                    </p>

                                    <ul class="list-unstyled">

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Reliable power backup during electricity failures
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Energy-efficient UPS and inverter systems
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Suitable for homes, offices, shops, and commercial spaces
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Genuine products from leading trusted brands
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Fast installation and professional customer support
                                        </li>

                                    </ul>

                                </div>

                                <!-- Benefits -->
                                <div class="service-benefit">

                                    <h4 class="mb-4">
                                        Benefits of Home UPS & Inverters
                                    </h4>

                                    <p class="mb-3">
                                        Home UPS and inverter systems provide uninterrupted power supply and protect your electrical appliances from sudden shutdowns caused by power cuts. They help maintain daily activities smoothly while ensuring comfort, productivity, and convenience at home and workplaces.
                                    </p>

                                    <p class="mb-3">
                                        Modern inverter systems are designed with advanced technology that offers better energy efficiency, faster charging, low maintenance, and longer battery life. They are ideal for areas with frequent electricity interruptions and provide dependable backup support whenever needed.
                                    </p>

                                    <p>
                                        At Garg Enterprises, we focus on delivering high-quality power backup solutions with expert guidance, affordable pricing, quick installation, and dedicated after-sales support. Our goal is to provide customers with reliable and long-lasting UPS and inverter systems that meet every power requirement efficiently.
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