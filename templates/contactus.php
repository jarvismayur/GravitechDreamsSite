<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Contact Us | Gravitech Dreams</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178509363-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-178509363-1');
  </script>


  <!-- SEO By Gravitech Dreams Private Limited -->
  <meta name="description" content="Gravitech Dreams Private Limited deals with real life problems and merges with Technology and Skills to Develop and Optimize the Solutions for Accuracy, We deal with Desings, Web Development, SEO , IOT, Cloud & Many More."/>
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
  <link rel="canonical" href="https://www.gravitydream.in/contactus.php" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="Contact" />
  <meta property="og:title" content="Contact Us | Gravitech Dreams" />
  <meta property="og:description" content="Gravitech Dreams Private Limited deals with real life problems and merges with Technology and Skills to Develop and Optimize the Solutions for Accuracy, We deal with Desings, Web Development, SEO , IOT, Cloud & Many More." />
  <meta property="og:url" content="https://www.gravitydream.in/contactus.php" />
  <meta property="og:site_name" content="Gravitech Dream" />
  <meta property="article:publisher" content="https://www.facebook.com/GravitechDream" />
  <meta property="article:section" content="Gravitech Dreams Private Limited" />
  <meta property="article:published_time" content="2020-09-13T14:44:49+00:00" />
  <meta property="article:modified_time" content="2020-09-13T19:52:08+00:00" />
  <meta property="og:updated_time" content="2020-09-13T19:52:08+00:00" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="Gravitech Dreams Private Limited deals with real life problems and merges with Technology and Skills to Develop and Optimize the Solutions for Accuracy, We deal with Desings, Web Development, SEO , IOT, Cloud & Many More." />
  <meta name="twitter:title" content="Gravitech Dream" />
  <meta name="twitter:site" content="https://twitter.com/GravitechD" />
  <!-- End Of Gravitech Dream SEO -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="https://twitter.com/GravitechD" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/GravitechDream" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://www.linkedin.com/company/gravitydream" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/gravitechdreams/" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left d-inline-flex">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h2 class="text-light"><a href="index.php" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid">&emsp;<span>Contact Us & Request A Quote </span></a></h2>

      </div>

    <?php include_once 'inc/nav.php'; ?>

    </div>
  </header><!-- #header -->



<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
  <div class="container d-flex h-100">
    <div class="row justify-content-center align-self-center">
      <div class="col-md-6 intro-info order-md-first order-last">
        <h2>Request A <span> Quote </span> Or <span> Contact Us </span> Below For More Details </h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Request A Quote</a>
          <a href="#call-to-action" class="btn-get-started scrollto">Contact Us</a>
        </div>
      </div>

      <div class="col-md-6 intro-img order-md-last order-first">
        <img src="img/contactus.png" alt="" class="img-fluid">
      </div>
    </div>

  </div>
</section><!-- #intro -->

<!--==========================
  About Us Section
============================-->
<main>

<section id="about">

  <div class="container">
    <div class="row">

      <div class="col-lg-5 col-md-6">
        <div class="about-img">
          <img src="img/quote_req.png" alt="">
        </div>
      </div>

      <div class="col-lg-7 col-md-6">
        <div class="about-content">
          <h2>Please Fill The Form </h2>
          <div class="form col-sm-8 ">
            <div><?php displayMessage();?> </div>
            <form action="contactus.php" method="post"  >
              <div class="form-group mb-4">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
              </div>
              <div class="form-group mb-4">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />
              </div>
              <div class="form-group mb-4">
                <input type="tel" class="form-control" name="number" id="number" placeholder="Your Mobile Number Or WhatApp Number With Country Code"  />
              </div>



              <div class="text-center"><button name="submitforquote" class="btn btn-primary" type="submit" title="Submit Details">Get A Call Back </button></div>
            </form>
        </div>
      </div>
    </div>
  </div>

</section><!-- #about -->

</section>

<!--==========================
  Call To Action Section
============================-->
<section id="call-to-action" class="wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center text-lg-left">
        <h3 class="cta-title"> Connect to Us</h3>
        <span class="cta-text">Head Office</span>
        <h5 class="cta-text">Gravitech Dreams Private Limited</h5>
        <p class="cta-text">Gandhi Ward , Tirora <br>Gondia, Pin-Code 441911, <br> Maharastra, India</p>
      </div>
      <div class="col-md-4  text-center">
        <div class="container">
          <div class="social-links">
            <span class="cta-title">Social Networks</span>
            <br><br>
            <p class="cta-text"><i class="	fa fa-phone"></i><a class="text-white ml-5" href="tel:+919730687488">+91 9730687488</a><br>
            <i class="	fa fa-whatsapp"></i><a class="text-white ml-5" href="https://wa.me/+919730687488">+91 9730687488</a><br>
            <i class="	fa fa-telegram"></i><a class="text-white ml-5" href="https://t.me/GravitechDreams">+91 9730687488</a><br></p>

            <a href="https://twitter.com/GravitechD" class="twitter m-4 mb-3 "><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/GravitechDream" class="facebook m-4 mb-3"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/company/gravitydream" class="linkedin m-4"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com/gravitechdreams/" class="instagram m-4"><i class="fa fa-instagram"></i></a><br>

          </div>
        </div>
      </div>
      <div class="col-md-4  text-center">
        <div class="container">
          <div class="social-links">
            <p class="cta-text"><i class="material-icons mr-3 mt-5">mail</i> <a href="mailto:info@gravitydream.in">info@gravitydream.in</a></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- #call-to-action -->



<?php include_once 'inc/footer.php';?>
