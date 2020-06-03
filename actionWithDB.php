<?php
include_once "dbConnector.php";
include_once "insertInDB.php";
include_once "loginsAndPasswords.php";

$uName = "admin";
$uPassword = "19861986";
$dbConnector = new dbConnector($uName, $uPassword);
$link = $dbConnector->connector();

$writerDB = new insertInDB($link);
$writerDB->writer();
