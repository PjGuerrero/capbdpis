<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Barangay Disaster Preparedness Information System</title>
    <meta content="Disaster Preparedness" name="description">
    <meta content="Disaster Preparedness" name="keywords">
    <meta name="author" content="Group 6">
    <link href="/mainassets/img/logo.gif" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link href="/mainassets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/mainassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mainassets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/mainassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/mainassets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/mainassets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/mainassets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="//mainassets/css/style.css" rel="stylesheet">
    <link href="/mainassets/css/custom.css" rel="stylesheet">
  
  

</head>
<body>
    
<?php
    $uri = service('uri');
   ?>
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="/">BDPIS</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo me-auto"><img src="/mainassets/img/logo.gif" alt="" class="img-fluid"> BDPIS</a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="<?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">Home</a></li>

          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/aboutus" class="<?= ($uri->getSegment(1) == 'aboutus' ? 'active' : null) ?>">About us</a></li>
              <li><a href="/barangayofficial" class="<?= ($uri->getSegment(1) == 'barangayofficial' ? 'active' : null) ?>">Barangay Officials</a></li>
              <li><a href="#">Barangay Profile</a></li>
              <li><a href="#">Resident  Profile</a></li>
            </ul>
          </li>
            <li class="dropdown"><a href="#"><span>Preparedness Guides</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/videoguides" class="<?= ($uri->getSegment(1) == 'videoguides' ? 'active' : null) ?>">Video Guides</a></li>
                  <li><a href="/imageguides" class="<?= ($uri->getSegment(1) == 'imageguides' ? 'active' : null) ?>">Images Guides</a></li>
                  <li><a href="/faqs" class="<?= ($uri->getSegment(1) == 'faqs' ? 'active' : null) ?>">FAQs</a></li>
                </ul>
              </li>
          <li><a href="/highriskmap" class="<?= ($uri->getSegment(1) == 'highriskmap' ? 'active' : null) ?>">High Risk Map</a></li>
          <li><a href="/contact" class="<?= ($uri->getSegment(1) == 'contact' ? 'active' : null) ?>">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
