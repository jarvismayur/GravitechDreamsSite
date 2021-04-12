<?php include_once 'config/init.php' ?>


<?php
$gravity = new Gravity;
$template = new Template('templates/newswritter.php');



$template->user = $_SESSION['user'];

echo $template;
