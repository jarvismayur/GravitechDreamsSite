<?php include_once 'config/init.php' ?>


<?php
$gravity = new Gravity;
$template = new Template('templates/index.php');
if(isset($_POST['submit'])){
  $data = array();
  $data['name'] = $_POST['name'];
  $data['email'] = $_POST['email'];
  $data['subject'] = $_POST['subject'];
  $data['message'] = $_POST['message'];
  if($gravity->accept_new_message($data)){
    redirect("index.php", "We have Received Your Message.. We will reach u as soon as Possible", "success");
  }else{
    redirect("ras.php", "Something Went Wrong Try Again Later", "error");
  }
}

if(isset($_POST['subsubmit'])){
  $data = array();
  $data['email'] = $_POST['email'];
  if($gravity->sub_email($data)){
    redirect("index.php", "", "success");
  }else{
    redirect("index.php", "", "error");
  }
}
echo $template;
?>
