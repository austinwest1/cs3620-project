<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./User/user.php');

$id = $_GET["id"];
$un = $_GET["un"];
$fn = $_GET["fn"];
$ln = $_GET["ln"];

// echo $id;
// echo $un;
// echo $fn;
// echo $ln;

if ($id != -1) {
    //echo "*";
    $user = new user();
    $user->getUser($_GET["id"]);
} else if ($un != -1) {
    //echo "**";
    $user = new user();
    $user->getUserByUsername($un);
} else if ($fn != -1) {
    //echo "***";
    $user = new user();
    $user->getUserByFirstname($fn);
} else if ($ln != -1) {
    //echo "****";
    $user = new user();
    $user->getUserByLastname($ln);
}

echo json_encode($user);

//echo $_GET[1];

// $user = new user();
// $user->getUser($_GET["id"]);

//$user->getUserByUsername($_GET["un"]);


// $user->getUserByFirstname("first_name", $_GET["fn"]);
// $user->getUserByUsername("username", $_GET["un"]);
// $user->getUserByLastname("last_name", $_GET["ln"]);

//$fn = $_GET["fn"];

// if ($fn != -1) {
//     $user->getUserByFirstname("first_name", $_GET["fn"]);
//     echo "***";
// } else if ($_GET["un"] != -1) {
//     $user->getUserByUsername("username", $_GET["un"]);
// } else if ($_GET["ln"] != -1) {
//     $user->getUserByLastname("last_name", $_GET["ln"]);
// } else if ($_GET["id"] != -1) {
//     $user->getUser($_GET["id"]);
// }
