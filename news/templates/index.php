<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> News | Gravitech Dreams</title>
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

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178509363-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178509363-1');
</script>
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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
        <h2 class="text-light"><a href="index.php" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid">&emsp;<span>GD News  </span></a></h2>

      </div>

      <?php include_once '../templates/inc/nav.php'; ?><br>




    </div>
  </header><!-- #header -->

<section id="news">
  <div class="container">

<?php foreach ($news_feed as $news):?>


  <div class="col-lg border rounded">
     <div class="row">
     <div class="col-sm-2">
       <img src="uploads/news/<?php echo $news->file; ?>" alt="" class="news-img">
     </div>
     <div class="col-lg p-4 border-left">
        <h4><?php echo $news->title; ?></h4>
        <p><?php echo $news->content; ?></p>
        <a class="float-right" href="news_reader.php?id=<?php echo $news->id;?>">ReadMore</a>
     </div>
  </div>
  </div>
<?php endforeach; ?>



  </div>
</section>













<?php include_once '../templates/inc/footer.php';?>
