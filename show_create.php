<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once('./show/show.php');
require_once('./sessioncheck.php');

$show = new Show();
//$show->setShowId($_POST["username"]);
$show->setShowName($_POST["title"]);
$show->setShowRating($_POST["rating"]);
$show->setShowDescription($_POST["description"]);
$show->addShow($_SESSION["user_id"]);

header("Location: dashboard2.php");
