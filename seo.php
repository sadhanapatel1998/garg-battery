<?php

$currentPage = basename($_SERVER['PHP_SELF']);

/*
|--------------------------------------------------------------------------
| PAGE SEO DATA - GARG ENTERPRISES
|--------------------------------------------------------------------------
*/

$seoData = [

    /* HOME PAGE */
    "index.php" => [
        "title" => "Garg Enterprises | Batteries, UPS & Solar Solutions",
        "description" => "Garg Enterprises provides trusted inverter batteries, UPS systems, car batteries, solar solutions, battery replacement, and reliable power backup services.",
        "keywords" => "Garg Enterprises, inverter batteries, UPS systems, solar solutions, car batteries, battery dealer",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* ABOUT PAGE */
    "about-us.php" => [
        "title" => "About Garg Enterprises | Trusted Battery & Power Solutions",
        "description" => "Learn about Garg Enterprises, a trusted provider of batteries, UPS systems, inverter solutions, and solar products with reliable customer support.",
        "keywords" => "about Garg Enterprises, battery shop, inverter dealer, UPS solutions",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* ALL SERVICES */
    "all-services.php" => [
        "title" => "Our Services | Garg Enterprises",
        "description" => "Explore batteries, UPS systems, inverter solutions, solar products, battery replacement, and power backup services at Garg Enterprises.",
        "keywords" => "battery services, UPS services, solar solutions, inverter batteries",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* PRODUCTS PAGE */
    "products.php" => [
        "title" => "Our Products | Garg Enterprises",
        "description" => "Discover premium inverter batteries, UPS systems, solar products, automotive batteries, and power backup solutions at Garg Enterprises.",
        "keywords" => "battery products, inverter products, UPS batteries, solar batteries",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* INVERTER BATTERIES */
    "inverter-batteries.php" => [
        "title" => "Inverter Batteries | Garg Enterprises",
        "description" => "High-performance inverter batteries for homes, offices, shops, and commercial spaces with long-lasting backup and reliable performance.",
        "keywords" => "inverter batteries, tubular battery, home inverter battery",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* HOME UPS */
    "home-ups-inverters.php" => [
        "title" => "Home UPS & Inverters | Garg Enterprises",
        "description" => "Efficient home UPS and inverter systems designed for uninterrupted power backup, fast charging, and long-lasting durability.",
        "keywords" => "home UPS, power inverter, UPS systems, inverter solutions",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* CAR BATTERIES */
    "car-batteries.php" => [
        "title" => "Car Batteries | Garg Enterprises",
        "description" => "Reliable car batteries for cars, bikes, trucks, tractors, and commercial vehicles with installation and replacement support.",
        "keywords" => "car batteries, automotive batteries, bike battery, vehicle battery",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* SOLAR SOLUTIONS */
    "solar-solutions.php" => [
        "title" => "Solar Solutions | Garg Enterprises",
        "description" => "Advanced solar inverter systems, solar batteries, and energy-saving solar solutions for homes and businesses.",
        "keywords" => "solar solutions, solar inverter, solar battery, solar power systems",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* BATTERY REPLACEMENT */
    "battery-replacement.php" => [
        "title" => "Battery Replacement Services | Garg Enterprises",
        "description" => "Quick and reliable battery replacement services for inverter batteries, UPS batteries, and automotive batteries with doorstep support.",
        "keywords" => "battery replacement, inverter battery replacement, UPS battery service",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* BATTERY WHOLESALER */
    "battery-wholesaler.php" => [
        "title" => "Battery Wholesaler | Garg Enterprises",
        "description" => "Wholesale supplier of trusted batteries, inverter systems, and power backup products at competitive prices.",
        "keywords" => "battery wholesaler, wholesale batteries, inverter battery supplier",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* BATTERY MANUFACTURER */
    "battery-manufacturer.php" => [
        "title" => "Battery Manufacturer | Garg Enterprises",
        "description" => "Trusted battery manufacturing solutions with durable, high-performance batteries for residential and commercial applications.",
        "keywords" => "battery manufacturer, power backup batteries, industrial batteries",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* GALLERY */
    "gallery.php" => [
        "title" => "Gallery | Garg Enterprises",
        "description" => "Explore product images, store gallery, battery solutions, UPS systems, solar products, and installations by Garg Enterprises.",
        "keywords" => "battery gallery, inverter gallery, solar products gallery",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* CONTACT */
    "contact-us.php" => [
        "title" => "Contact Garg Enterprises | Batteries & UPS Solutions",
        "description" => "Contact Garg Enterprises for batteries, inverter solutions, UPS systems, solar products, and reliable customer support services.",
        "keywords" => "contact Garg Enterprises, battery dealer contact, UPS support",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* THANK YOU PAGE */
    "thank-you.php" => [
        "title" => "Thank You | Garg Enterprises",
        "description" => "Thank you for contacting Garg Enterprises. Our team will connect with you shortly regarding your inquiry.",
        "keywords" => "thank you page",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],

    /* ERROR PAGE */
    "error.php" => [
        "title" => "Page Not Found | Garg Enterprises",
        "description" => "The page you are looking for could not be found.",
        "keywords" => "404 error",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ]

];


/*
|--------------------------------------------------------------------------
| DEFAULT META
|--------------------------------------------------------------------------
*/

$defaultMeta = [
    "title" => "Garg Enterprises | Batteries, UPS & Solar Solutions",
    "description" => "Garg Enterprises offers trusted inverter batteries, UPS systems, solar solutions, automotive batteries, and power backup services.",
    "keywords" => "Garg Enterprises, batteries, UPS systems, inverter solutions, solar products",
    "canonical" => "",
    "robots" => "index, follow"
];


/*
|--------------------------------------------------------------------------
| META SELECTOR
|--------------------------------------------------------------------------
*/

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

?>