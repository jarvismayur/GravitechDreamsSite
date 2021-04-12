<?php include_once 'config/init.php' ?>


<?php
$gravity = new Gravity;
$template = new Template('templates/cloud.php');

if(isset($_POST['submit'])){
  $data = array();
  $data['email'] = $_POST['email'];
  $data['password'] = $_POST['password'];

  if($gravity->cloud_login($data)){
    $_SESSION['user'] = 'tembharemayur';
    redirect('cloud_dash.php', 'Login Successfull', "success");
  }else{
    redirect('cloud.php', "Something Went Wrong... Please Try Again Later", "error");
  }
}

echo $template;
