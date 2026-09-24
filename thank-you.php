<?php
ob_start();
?>

<section class="error py-10">

    <div class="container">

        <div class="error-inner text-center">

            <div class="section-body w-lg-50 w-md-75 m-auto">

                <h1 class="text-white mb-2">
                    Thank You!
                </h1>

                <h2 class="mb-4">
                    Your Inquiry Has Been Submitted
                </h2>

                <p class="mb-4">
                    Thank you for contacting Garg Enterprises. Our team has received your inquiry and will get back to you shortly with the best power backup solution for your needs.
                </p>

                <a href="index.php" class="btn btn2">
                    Back to Home
                </a>

            </div>

        </div>

    </div>

</section>


<?php
$content = ob_get_clean();
require 'layout.php';
?>