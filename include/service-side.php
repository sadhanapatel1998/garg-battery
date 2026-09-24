<?php include('php-mailer.php');?>
<div class="service-info-right">
    <div class="other-services py-7 px-6 shadow rounded2 mb-6">
        <div class="other-service-title px-2 py-3 text-center bg-lightgreen rounded2 mb-5">
            <h4>Other Services</h4>
        </div>
        <div class="other-service-lists">
            <ul class="list-unstyled">

                <li class="border-dashed border-top-0 border-start-0 border-end-0 mb-3 pb-3">
                    <a href="inverter-batteries.php" class="grey">
                        <i class="fa fa-battery-full me-2" aria-hidden="true"></i>
                        Inverter Batteries
                    </a>
                </li>

                <li class="border-dashed border-top-0 border-start-0 border-end-0 mb-3 pb-3">
                    <a href="home-ups-inverters.php" class="grey">
                        <i class="fa fa-bolt me-2" aria-hidden="true"></i>
                        Home UPS & Inverters
                    </a>
                </li>

                <li class="border-dashed border-top-0 border-start-0 border-end-0 mb-3 pb-3">
                    <a href="car-batteries.php" class="grey">
                        <i class="fa fa-car me-2" aria-hidden="true"></i>
                        Car Batteries
                    </a>
                </li>

                <li class="border-dashed border-top-0 border-start-0 border-end-0 mb-3 pb-3">
                    <a href="solar-solutions.php" class="grey">
                        <i class="fa fa-sun-o me-2" aria-hidden="true"></i>
                        Solar Solutions
                    </a>
                </li>

                <li class="border-dashed border-top-0 border-start-0 border-end-0 mb-3 pb-3">
                    <a href="battery-replacement.php" class="grey">
                        <i class="fa fa-refresh me-2" aria-hidden="true"></i>
                        Battery Replacement
                    </a>
                </li>

                <li class="border-dashed border-top-0 border-start-0 border-end-0 mb-3 pb-3">
                    <a href="battery-wholesaler.php" class="grey">
                        <i class="fa fa-truck me-2" aria-hidden="true"></i>
                        Battery Wholesaler
                    </a>
                </li>

                <li>
                    <a href="battery-manufacturer.php" class="grey">
                        <i class="fa fa-industry me-2" aria-hidden="true"></i>
                        Battery Manufacturer
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="quick-contact py-7 px-6 shadow rounded2">
        <div class="other-service-title px-2 py-3 text-center bg-lightgreen rounded2 mb-5">
            <h4>Quick contact</h4>
        </div>
        <div class="contact-form">
            <form action="" method="POST">

                <input type="text"
                    name="name"
                    placeholder="Your Name *"
                    class="mb-4"
                    value="<?= $name ?? '' ?>">

                <span class="text-danger small">
                    <?= $nameErr ?? '' ?>
                </span>

                <input type="email"
                    name="email"
                    placeholder="Your Email *"
                    class="mb-4"
                    value="<?= $email ?? '' ?>">

                <span class="text-danger small">
                    <?= $emailErr ?? '' ?>
                </span>

                <input type="text"
                    name="phone"
                    placeholder="Your Number *"
                    class="mb-4"
                    value="<?= $phone ?? '' ?>">

                <span class="text-danger small">
                    <?= $phoneErr ?? '' ?>
                </span>

                <textarea rows="4"
                    placeholder="Enter your message.."
                    class="mb-4"
                    name="message"><?= $message ?? '' ?></textarea>

                <span class="text-danger small">
                    <?= $messageErr ?? '' ?>
                </span>

                <button class="btn btn2 w-100" type="submit">
                    Submit Now
                </button>

            </form>
        </div>
    </div>
</div>