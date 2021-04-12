<?php include_once 'config/init.php' ?>


<?php
$gravity = new Gravity;
$template = new Template('templates/cloud_dash.php');

if($_SESSION['user']==null){
  redirect('cloud.php', "Please Login First", "error");
}

if(isset($_POST['logout'])){
  $_SESSION['user']= null;
  redirect('cloud.php', "Logout Successfull", "success");
}

$template->user = $_SESSION['user'];

echo $template;
