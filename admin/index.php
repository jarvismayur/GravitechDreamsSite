<?php include_once 'config/init.php' ?>
<?php

session_start();
if(!empty($_SESSION["userId"])) {
  $template = new Template('templates/Admin.php');

  $gravity = new Gravity;
  $template->data = $gravity->get_catergory();


  echo $template;

} else {
  $template = new Template('templates/gd-login.php');



  echo $template;

}







 ?>
