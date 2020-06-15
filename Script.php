<?php
use PhpstormProjects\untitled1\View;
require "View.php";

$arr = ["Я.Я. Величко", "Помыть пол", "active", "create"];
$view = new View($arr);
$view->startingService();