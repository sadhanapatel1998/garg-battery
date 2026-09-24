<?php include('seo.php'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO Meta -->
  <meta name="google-site-verification" content="7hIOZ1PKkTDBABfGjOx6RfwHfjpeT4qJa-vPRjpnoPE" />

  <title><?php echo $pageMeta['title']; ?></title>

  <meta name="description" content="<?php echo $pageMeta['description']; ?>">

  <meta name="keywords" content="<?php echo $pageMeta['keywords']; ?>">

  <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">

  <!-- Canonical -->
  <?php if (!empty($pageMeta['canonical'])): ?>
    <link rel="canonical" href="<?php echo $pageMeta['canonical']; ?>">
  <?php endif; ?>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/site.webmanifest">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!--CSS Plugins-->
  <link rel="stylesheet" href="assets/css/plugin.css">
  <!-- Default CSS-->
  <link rel="stylesheet" href="assets/css/default.css">
  <!--Custom CSS-->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!--FontAwesome CSS-->
  <link rel="stylesheet" href="assets/icons/font-awesome.min.css">
  <link href="assets/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <?php require_once("include/header.php"); ?>
  <?= $content ?? ''; ?>
  <?php require_once("include/footer.php"); ?>

  <!--Back-to-top Button start-->
  <div id="back-to-top">
    <a href="#" class="bg-green position-relative align-items-center rounded-circle d-block border border-4 border-grey"></a>
  </div>
  <!--Bacl-to-top Button end-->

  <!-- Floating Buttons Start -->
  <div class="floating-icons">

    <!-- Call Button -->
    <a href="tel:+919873364834" class="float-call" target="_blank">
      <i class="fa fa-phone"></i>
    </a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/919873364834" class="float-whatsapp" target="_blank">
      <i class="fa fa-whatsapp"></i>
    </a>

  </div>
  <!-- Floating Buttons End -->

  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/plugin.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/custom-lightbox.js"></script>
  <script defer="" src="assets/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon='{"version":"2024.11.0","token":"e2e296138d64407b8469055f5cbf0b42","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
  <script>
    (function() {
      function c() {
        var b = a.contentDocument || a.contentWindow.document;
        if (b) {
          var d = b.createElement('script');
          d.innerHTML = "window.__CF$cv$params={r:'9f7e87e74b930b58',t:'MTc3ODEzOTE0Nw=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
          b.getElementsByTagName('head')[0].appendChild(d)
        }
      }
      if (document.body) {
        var a = document.createElement('iframe');
        a.height = 1;
        a.width = 1;
        a.style.position = 'absolute';
        a.style.top = 0;
        a.style.left = 0;
        a.style.border = 'none';
        a.style.visibility = 'hidden';
        document.body.appendChild(a);
        if ('loading' !== document.readyState) c();
        else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
        else {
          var e = document.onreadystatechange || function() {};
          document.onreadystatechange = function(b) {
            e(b);
            'loading' !== document.readyState && (document.onreadystatechange = e, c())
          }
        }
      }
    })();
  </script>


</body>

</html>