<?php
use PhpstormProjects\untitled1\View;
require "View.php";

$arr = ["Я.Я. Величко", $_POST['0'], $_POST['1'], $_POST['2']];
$view = new View($arr);
$view->startingService();