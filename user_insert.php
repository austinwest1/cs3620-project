<?php

session_start();

require_once('./User/user.php');

$user = new User();

$user->setUsername(($_POST["username"]));
$user->setFirstname(($_POST["firstname"]));
$user->setLastname(($_POST["lastname"]));
$user->setPassword(($_POST["password"]));
$user->createUser();
