<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// session_start();

// require_once('./User/user.php');

// $user = new User();

// $user->setUsername(($_POST["username"]));
// $user->setFirstname(($_POST["firstname"]));
// $user->setLastname(($_POST["lastname"]));
// $user->setPassword(($_POST["password"]));
// $user->createUser();

// header("Location: login.html");
?>


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./User/user.php');

$user = new user();
$user->setUsername($_POST["username"]);
$user->setFirstName($_POST["firstname"]);
$user->setLastName($_POST["lastname"]);
$user->setPassword($_POST["password"]);
$user->createUser();

header("Location: login.html");
?>
