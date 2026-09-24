<?php
ob_start();
?>

<!-- Error Section Starts -->
<section class="error py-10">
    <div class="container">
        <div class="error-inner text-center">
            <div class="section-body w-lg-50 w-md-75 m-auto">
                <h1 class="text-white mb-2">
                    404 !
                </h1>
                <h2 class="mb-4">
                    Oops! Page Not Found
                </h2>
                <p class="mb-4">
                    The page you are looking for may have been removed, renamed, or is temporarily unavailable. Please return to the homepage and continue exploring Garg Enterprises.
                </p>
                <a href="index.php" class="btn btn2">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Error Section Ends -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>