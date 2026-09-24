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
                <h1 class="text-white mb-2">Our Product</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href="">Our Product</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends -->

<!-- Product List Section Starts -->
<section class="product-list py-10">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title mb-7 text-center w-lg-60 m-auto">
            <h2 class="mb-1">
                Our Products & Services
            </h2>
            <p>
                Explore our wide range of batteries, UPS systems, inverter solutions, solar products, and professional power backup services for homes, businesses, and commercial spaces.
            </p>
        </div>
        <div class="product-list-inner">
            <div class="row gx-lg-5 gy-5">
                <div class="col-lg-12">
                    <div class="section-right text-center">
                        <div class="product-listing">
                            <div class="row gy-4">
                                <?php foreach($products as $product): ?>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-box p-4 rounded2 border border-2 border-lightgreen h-100">
                                        <!-- Product Image -->
                                        <div class="product-image mb-4 position-relative">

                                            <a href="javascript:void(0);">
                                                <img src="<?= $product['image']; ?>"
                                                    alt="<?= $product['title']; ?>"
                                                    class="w-100 rounded2">
                                            </a>
                                        </div>

                                        <!-- Product Info -->
                                        <div class="product-info">
                                            <h5 class="mb-2">
                                              <?= $product['title']; ?>
                                            </h5>
                                            <!-- <a href="<?//= $product['link']; ?>" class="btn btn2">
                                                View Details
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product List Section Ends -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>