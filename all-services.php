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
                <h1 class="text-white mb-2">All Services</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href="">All Services</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends -->

<!-- Service Section Starts -->
<section class="service py-10 position-relative rounded3 rounded-top-0 bg-white" style="background: none;">
    <div class="container position-relative">
        <div class="service-inner">

            <!-- Section Title -->
            <div class="section-title mb-6 text-center text-lg-start">
                <div class="row gx-lg-5 align-items-center">

                    <div class="col-lg-7">
                        <div class="section-title-left">
                            <h6 class="mb-2  text-uppercase fw-medium">
                                Our Products & Services
                            </h6>

                            <h2 class="ps-4 border-start border-3 ">
                                Reliable <span class="green">Power Backup Solutions</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services -->
            <div class="section-body">
                <div class="row gy-4">

                    <?php foreach (array_slice($services, 0, 7) as $service): ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-box p-4 border bg-white border-2 border-lightgreen rounded2 shadow h-100">

                                <div class="service-icon mb-4">
                                    <img src="<?= $service['icon']; ?>" alt="service-icon" class="img-fluid rounded-3">
                                </div>

                                <div class="service-info">
                                    <h4>
                                        <a href="<?= $service['link']; ?>" class="black">
                                            <?= $service['title']; ?>
                                        </a>
                                    </h4>

                                    <p class="mt-2 mb-4">
                                        <?= $service['description']; ?>
                                    </p>

                                    <a href="<?= $service['link']; ?>" class="btn border border-1 border-green">
                                        Learn More
                                    </a>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Service Section Ends -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>