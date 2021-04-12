<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Gravitech Dreams</title>
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">GD Admin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item ">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              News<span class="sr-only">(current)</span>
            </a>

          </li>
        
          <li class="nav-item ">
            <a href="./logout.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">



    <div class="col-lg-6">
      <br><br><br><br>
      <?php displayMessage();?>
      <form class="form" action="Work.php" method="post" enctype="multipart/form-data">
        <div class="form-group mx-auto">
          <label for="categories" class="h4">Catergories</label>
          <select class="form-control" name="catergory">
            <option value="0">Choose A Catergory</option>
            <?php foreach ($data as $data): ?>
              <option value="<?php echo $data->name; ?>"><?php echo $data->name; ?></option>
            <?php endforeach;?>
          </select>
          <a data-toggle="modal" data-target="#Catergory" href="">Add Catergory </a>
        </div>
        <div class="form-group mx-auto">
          <label for="title" class="h4">Title</label>
          <input type="text" class="form-control" name="title" value=""  required>
        </div>
        <div class="form-group mx-auto">
          <label for="content" class="h4">Content</label>
          <textarea name="content"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="description" class="h4">Description 1</label>
          <textarea name="desp_1"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="description" class="h4">Description 2</label>
          <textarea name="desp_2"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="description" class="h4">Description 3</label>
          <textarea name="desp_3"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="description" class="h4">Description 4</label>
          <textarea name="desp_4"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="description" class="h4">Description 5</label>
          <textarea name="desp_5"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group mx-auto">
          <label for="title" class="h4">Image</label>
          <input type="file" class="form-control" name="file" value=""  required>
        </div>

        </div>
        <div class="form-group mx-auto">
          <label for="tags" class="h4">Video Link</label>
          <input type="text" class="form-control" name="video_link" value=""  required>
        </div>
        <div class="form-group mx-auto">
          <label for="tags" class="h4">Tags</label>
          <input type="text" class="form-control" name="tags" value=""  required>
        </div>
        <div class="form-group mx-auto">
          <input type="submit" class="btn btn-dark" name="submit_post" value="Publish">
          <input type="submit" class="btn btn-dark" name="draft" value="Draft">
        </div>
      </form>
    </div>





    </main>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="Catergory" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="Catergory" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Catergory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


          <form class="form " action="Work.php" method="post">
            <div class="form-group mx-auto">
            <input type="text" class="form-control" name="catergory" value="" placeholder="Catergory" required>
          </div>




        </div>
      <div class="modal-footer">
        <button type="submit" name="submit_catergory" class="btn btn-primary">Add Catergory</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="Store" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="Catergory" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


          <form class="form " action="" method="post" enctype="multipart/form-data">
            <div class="form-group mx-auto">
              <input type="text" class="form-control" name="name" value="" placeholder="Name" required>
            </div>
            <div class="form-group mx-auto">
              <select class="form-control" name="catergory">
                <option value="0">Choose A Catergory</option>
              </select>
              <a data-toggle="modal" data-target="#Catergory" href="">Add Catergory </a>
            </div>
            <div class="form-group mx-auto">
              <select class="form-control" name="sub_catergory">
                <option value="0">Choose A Sub Catergory</option>
              </select>
              <a data-toggle="modal" data-target="#Catergory" href="">Add Sub Catergory </a>
            </div>
            <div class="form-group mx-auto">
              <input type="text" class="form-control" name="description" value="" placeholder="Description" required>
            </div>
            <div class="form-group mx-auto">
              <input type="text" class="form-control" name="price" value="" placeholder="Price" required>
            </div>
            <div class="form-group mx-auto">
              <input type="text" class="form-control" name="min_discount" value="" placeholder="Min Discount" required>
            </div>
            <div class="form-group mx-auto">
              <input type="text" class="form-control" name="max_discount" value="" placeholder="Max Discount" required>
            </div>
            <div class="form-group mx-auto">
              <input type="file" class="form-control" name="file" value=""  required>
            </div>






        </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Add Catergory</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
