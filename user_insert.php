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

header("Location: login2.html");
