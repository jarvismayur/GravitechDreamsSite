<?php include_once 'config/init.php' ?>
<?php

session_start();
if(!empty($_SESSION["userId"])) {
  $template = new Template('templates/Admin.php');

  

  echo $template;

} else {
  $template = new Template('templates/gd-login.php');



  echo $template;

}







 ?>
