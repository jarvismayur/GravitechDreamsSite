<?php include_once 'config/init.php' ?>


<?php
$gravity = new Gravity;
$template = new Template('templates/news.php');


$template->news_feed= $gravity->get_news_feed();
echo $template;
