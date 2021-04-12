<?php include_once 'config/init.php' ?>


<?php
$gravity = new Gravity;
$template = new Template('templates/news_reader.php');


$data =isset($_GET['id'])?$_GET['id']:null;

if($data!=null){
  $template->news_feed_by_id= $gravity->get_news_feed_by_id($data);
}


echo $template;
