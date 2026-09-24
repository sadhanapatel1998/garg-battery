<?php
ob_start();
include('include/data.php');
include('php-mailer.php');
?>
<!-- Banner Section Starts -->
<section class="banner breadcrumb mb-0 position-relative rounded3 rounded-top-0">
    <div class="overlay rounded3 rounded-top-0"></div>
    <div class="container position-relative">
        <div class="banner-inner pt-0 w-lg-75 m-auto text-center text-white ">
            <div class="section-title mb-2">
                <h1 class="text-white mb-2">Contact Us</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends -->

<!-- Contact Section Starts -->
<section class="contact py-10 position-relative">

    <div class="overlay"></div>

    <div class="container position-relative pb-8">

        <div class="contact-inner text-center text-lg-start">

            <div class="row gx-xl-5 gy-5 align-items-center">

                <!-- Left Side -->
                <div class="col-lg-6">

                    <div class="section-left">

                        <div class="section-title mb-4">

                            <h6 class="text-uppercase fw-medium green1 mb-1">
                                Get In Touch
                            </h6>

                            <h2 class="ps-4 border-start border-3 border-green mb-4">
                                Contact <span class="green">Garg Enterprises</span> for reliable power solutions
                            </h2>

                        </div>

                        <div class="section-body">

                            <p class="mb-4">
                                Garg Enterprises provides trusted batteries, UPS systems, inverters, solar solutions, and professional power backup services for homes, offices, shops, and commercial spaces with dependable customer support.
                            </p>

                            <div class="contact-info text-center">

                                <div class="row gy-4">

                                    <!-- Address -->
                                    <div class="col-lg-12">

                                        <div class="contact-info-box bg-white text-md-start d-md-flex align-items-center p-4 border border-2 border-lightgreen rounded2">

                                            <div class="contact-icon me-5">
                                                <i class="fa fa-map-marker text-center bg-green rounded-circle text-white"
                                                    aria-hidden="true"></i>
                                            </div>

                                            <div class="contact-box-info">

                                                <h5 class="mb-1">
                                                    Store Address
                                                </h5>

                                                <span>
                                                    Sai Baba Chowk, D-12/182, opp. Metro Pillar no-393, Pocket 12, Sector-8, Rohini, New Delhi, Delhi, 110085
                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- Phone -->
                                    <div class="col-lg-12">

                                        <div class="contact-info-box bg-white text-md-start d-md-flex align-items-center p-4 border border-2 border-lightgreen rounded2">

                                            <div class="contact-icon me-5">
                                                <i class="fa fa-phone text-center bg-green rounded-circle text-white"
                                                    aria-hidden="true"></i>
                                            </div>

                                            <div class="contact-box-info">

                                                <h5 class="mb-1">
                                                    Phone Number
                                                </h5>

                                                <span>
                                                    <a href="tel:+919873364834" class="grey">
                                                        +91 9873364834
                                                    </a>
                                                    /
                                                </span>
                                                <span>
                                                    <a href="tel:+01127940873" class="grey">
                                                        +01127940873
                                                    </a>
                                                    /
                                                </span>

                                                <span>
                                                    <a href="tel:+919891002888" class="grey">
                                                        +91 9891002888
                                                    </a>
                                                </span>


                                            </div>

                                        </div>

                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-12">

                                        <div class="contact-info-box bg-white text-md-start d-md-flex align-items-center p-4 border border-2 border-lightgreen rounded2">

                                            <div class="contact-icon me-5">
                                                <i class="fa fa-envelope-o text-center bg-green rounded-circle text-white"
                                                    aria-hidden="true"></i>
                                            </div>

                                            <div class="contact-box-info">

                                                <h5 class="mb-1">
                                                    Email Address
                                                </h5>

                                                <span>
                                                    <a href="mailto:info@gargentprises.com" class="grey">
                                                        info@gargentprises.com
                                                    </a>
                                                </span>

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Right Side -->
                <div class="col-lg-6">

                    <div class="section-right">

                        <div class="section-title mb-4">

                            <h6 class="text-uppercase fw-medium green1 mb-1">
                                Contact Us
                            </h6>

                            <h2 class="ps-4 border-start border-3 border-green mb-2">
                                Send Your <span class="green">Inquiry</span>
                            </h2>

                            <p>
                                Our team is ready to help you with batteries, UPS systems, inverter solutions, and all power backup requirements.
                            </p>

                        </div>

                        <div class="contact-form p-6 border border-2 border-lightgreen rounded2 bg-white">

                            <form action="" method="POST">

                                <input type="text"
                                    name="name"
                                    class="bg-lightgreen mb-4 mx-1"
                                    placeholder="Your Name..."
                                    value="<?= $name ?? '' ?>">

                                <span class="text-danger small">
                                    <?= $nameErr ?? '' ?>
                                </span>

                                <input type="email"
                                    name="email"
                                    class="bg-lightgreen mb-4 mx-1"
                                    placeholder="Your Email..."
                                    value="<?= $email ?? '' ?>">

                                <span class="text-danger small">
                                    <?= $emailErr ?? '' ?>
                                </span>

                                <span class="d-md-flex">

                                    <div class="w-100">

                                        <input type="number"
                                            name="phone"
                                            class="bg-lightgreen mb-4 mx-1"
                                            placeholder="Phone Number..."
                                            value="<?= $phone ?? '' ?>">

                                        <span class="text-danger small">
                                            <?= $phoneErr ?? '' ?>
                                        </span>

                                    </div>

                                    <div class="w-100">

                                        <input type="text"
                                            name="subject"
                                            class="bg-lightgreen mb-4 mx-1"
                                            placeholder="Subject..."
                                            value="<?= $subject ?? '' ?>">

                                        <span class="text-danger small">
                                            <?= $subjectErr ?? '' ?>
                                        </span>

                                    </div>

                                </span>

                                <textarea name="message"
                                    placeholder="Enter your Message..."
                                    rows="4"
                                    class="bg-lightgreen mb-4"><?= $message ?? '' ?></textarea>

                                <span class="text-danger small">
                                    <?= $messageErr ?? '' ?>
                                </span>

                                <button class="bnt btn2 border-0" type="submit">
                                    Send Message
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Contact Section Ends -->

<!-- Branch Contact Starts -->
<section class="branch pb-10 position-relative">
    <div class="container">
        <div class="branch-inner text-center">
            <div class="contact-map mb-6">
                <iframe class="rounded2 w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.383431582538!2d77.124933!3d28.708085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e23dfa460f%3A0x12313b1990a9d23e!2sGarg%20Enterprises!5e0!3m2!1sen!2sin!4v1778241248461!5m2!1sen!2sin"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Branch Contact Ends -->



<?php
$content = ob_get_clean();
require 'layout.php';
?>