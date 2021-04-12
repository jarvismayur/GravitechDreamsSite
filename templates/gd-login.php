<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | Gravitech Dreams</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="css/floating-labels.css" rel="stylesheet">


  </head>
  <body>
    <div class="container">


    <form action="login-action.php" method="post" id="frmLogin" onSubmit="return validate();">
        <div class="form-signin text-Center">
            <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
            <div class="h3 mb-3 font-weight-normal">Login</div>
            <?php
            if(isset($_SESSION["errorMessage"])) {
            ?>
            <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
            <?php
            unset($_SESSION["errorMessage"]);
            }
            ?>
            <div class="form-group">
                <div>
                    <label for="username">Username</label><span id="user_info" class="error-info"></span>
                </div>
                <div>
                    <input name="user_name" id="user_name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="password">Password</label><span id="password_info" class="error-info"></span>
                </div>
                <div>
                    <input name="password" id="password" type="password"  class="form-control">
                </div>
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <div class="form-group">
                <div>
                    <input type="submit" name="login" value="Login"
                    class="btn btn-primary"></span>
                </div>
            </div>
        </div>
    </form>
    </div>
  </body>
</html>
