<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>  NEWS Editor | Gravitech Dreams</title>
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

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


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
        <h2 class="text-light"><a href="index.php" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid">&emsp;<span>GD News  Editor </span></a></h2>

      </div>


      <nav class="main-nav float-right d-none d-lg-block">
        <ul>

        <?php echo $user; ?>
        </ul>
      </nav>

    </div>
  </header><!-- #header -->


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <form class="form " action="newswritter.php" method="post">
              <div class="form-group mx-auto">
              <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
            </div>



          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <section id="news">
    <div class="container">
      <div class="row">


        <div class="col-lg-8">


      <form class="form" action="newswritter.php" method="post">
        <h3 class="text-center">Publish A Post</h3>
        <div class="form-group mx-auto">
          <label for="title" class="h4">Title</label>
          <input type="text" class="form-control" name="title" value=""  required>
        </div>
        <div class="form-group mx-auto">
          <label for="content" class="h4">Content</label>
          <textarea name="content"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="description" class="h4">Description</label>
          <textarea name="description"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="title" class="h4">Image</label>
          <input type="file" class="form-control" name="file" value=""  required>
        </div>
        <div class="form-group mx-auto">
          <label for="categories" class="h4">Catergories</label>
          <select class="form-control" name="">
            <option value="0">Choose A Catergory</option>
          </select>
          <a data-toggle="modal" data-target="#Catergory" href="">Add Catergory </a>
        </div>
        <div class="form-group mx-auto">
          <label for="tags" class="h4">Tags</label>
          <input type="text" class="form-control" name="tags" value=""  required>
        </div>
        <div class="form-group mx-auto">
          <input type="submit" class="btn btn-dark" name="submit" value="Publish">
          <input type="submit" class="btn btn-dark" name="draft" value="Draft">
        </div>

      </form>
        </div>




  <aside class="col-lg-2 blog-sidebar">
    <h4 class="font-italic">SEO</h4>
    <h4 class="font-italic">Social Sites</h4>
    <div class="">
      <div class="form-group mx-auto">
        <label for="title" class="h4"></label>
        <input type="text" class="form-control" name="title" value=""  required>
      </div>
    </div>


  </aside>

</div>
</div>
</section>

  <!-- Modal -->
  <div class="modal fade" id="Catergory" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="Catergory" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <form class="form " action="newswritter.php" method="post">
              <div class="form-group mx-auto">
              <input type="text" class="form-control" name="Catergory" value="" placeholder="Catergory" required>
            </div>




          </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-primary">Add Catergory</button>
          </form>
        </div>
      </div>
    </div>
  </div>














<?php include_once 'inc/footer.php';?>
