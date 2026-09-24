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
                <h1 class="text-white mb-2"> Battery Wholesaler</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href="">Battery Wholesaler</a></li>
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
                    Wholesale Battery Supply Solutions
                </h2>

                <p>
                    Trusted wholesale supplier of inverter batteries, automotive batteries, UPS batteries, and industrial batteries with competitive pricing and reliable bulk supply support.
                </p>

            </div>

            <div class="section-body">

                <div class="service-info">

                    <div class="row gx-lg-5 gy-5">

                        <!-- Left Content -->
                        <div class="col-lg-8">

                            <img src="assets/images/services/battery-wholesaler.jpg"
                                alt="service image"
                                class="w-100 rounded2 mb-4">

                            <div class="service-info-left">

                                <!-- About Service -->
                                <div class="about-service mb-6">

                                    <h4 class="mb-2">
                                        About the Service
                                    </h4>

                                    <p class="mb-3">
                                        Garg Enterprises is a trusted battery wholesaler providing bulk battery supply solutions for dealers, retailers, businesses, workshops, commercial establishments, and industrial requirements. We offer a wide range of batteries suitable for residential, automotive, commercial, and industrial applications.
                                    </p>

                                    <p class="mb-4">
                                        Our wholesale inventory includes inverter batteries, UPS batteries, car batteries, bike batteries, truck batteries, solar batteries, and heavy-duty industrial batteries from leading trusted brands. We focus on delivering genuine products, competitive pricing, and reliable supply support to our customers.
                                    </p>

                                    <ul class="list-unstyled">

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Bulk supply of automotive and inverter batteries
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Trusted brands with genuine quality assurance
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Competitive wholesale pricing and reliable availability
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Supply solutions for retailers, dealers, and businesses
                                        </li>

                                        <li class="mb-3 d-flex align-items-center">
                                            <i class="fa fa-check me-2" aria-hidden="true"></i>
                                            Fast delivery and professional customer support
                                        </li>

                                    </ul>

                                </div>

                                <!-- Benefits -->
                                <div class="service-benefit">

                                    <h4 class="mb-4">
                                        Benefits of Wholesale Battery Supply
                                    </h4>

                                    <p class="mb-3">
                                        Wholesale battery purchasing helps businesses maintain consistent inventory while reducing operational costs through competitive bulk pricing. Reliable battery supply ensures uninterrupted business operations and customer satisfaction.
                                    </p>

                                    <p class="mb-3">
                                        Our wholesale battery solutions are suitable for retailers, automotive workshops, inverter dealers, service centers, transportation companies, and commercial businesses requiring dependable battery stock and support.
                                    </p>

                                    <p>
                                        At Garg Enterprises, we are committed to providing trusted wholesale battery solutions with quality products, affordable pricing, reliable inventory management, and dedicated customer assistance. Our focus is to build long-term business relationships through dependable supply and professional service.
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