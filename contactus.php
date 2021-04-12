<?php include_once 'config/init.php' ?>


<?php
$gravity = new Gravity;
$template = new Template('templates/contactus.php');



if(isset($_POST['submitforquote'])){
  $data = array();
  $data['name'] = $_POST['name'];
  $data['email'] = $_POST['email'];
  $data['mobno'] = $_POST['number'];
  if($gravity->req_quote($data)){
    redirect('contactus.php#about', 'We have Get Your Request.. We will contact You as Soon As Possible..', "success");
  }else{
    redirect('contactus.php', "Something Went Wrong... Please Try Again Later", "error");
  }
}
echo $template;
