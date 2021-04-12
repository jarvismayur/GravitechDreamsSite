<?php include_once 'config/init.php' ?>


<?php
$gravity = new gravity;
$template = new Template('templates/index.php');

$data =isset($_GET['id'])?$_GET['id']:null;

if($data!=null){
  $template->news_feed_by_id= $gravity->get_news_feed_by_id($data);
}

$template->news_feed= $gravity->get_news_feed();


echo $template;
