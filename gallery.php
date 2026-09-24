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
                <h1 class="text-white mb-2"> Image Gallery</h1>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li class="mx-4"><i class="fa fa-star-o green" aria-hidden="true"></i></li>
                    <li><a href=""> Image Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends -->

<div class="gallery py-10">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title mb-7 text-center w-lg-60 m-auto">
            <h2 class="mb-1">Our Gallery</h2>

            <p>
                Explore our premium collection of batteries, UPS systems,
                inverter solutions, solar products, and installation services.
            </p>
        </div>
        <div class="gallery-inner">
            <div id="animated-thumbnails" class="gallery-container">
                <?php foreach ($gallery as $item): ?>

                    <?php if (($item['type'] ?? 'image') === 'video'): ?>

                        <div class="gallery-item mid position-relative">
                            <video class="rounded2 border border-3 border-lightgreen"
                                controls
                                muted
                                playsinline
                                preload="metadata">
                                <source src="<?= $item['video']; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                    <?php else: ?>

                        <a href="<?= $item['image']; ?>" class="gallery-item mid position-relative">
                            <img src="<?= $item['image']; ?>"
                                alt="<?= $item['title']; ?>"
                                class="rounded2 border border-3 border-lightgreen position-relative">
                            <span class="overlay rounded2"></span>
                        </a>

                    <?php endif; ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'layout.php';
?>