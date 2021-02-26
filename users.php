

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./User/user.php');

$id = $_GET["id"];
$un = $_GET["un"];
$fn = $_GET["fn"];
$ln = $_GET["ln"];

if ($id != "") {
    //echo "*";
    $user = new user();
    $user->getUser($_GET["id"]);
} else if ($un != "") {
    //echo "**";
    $user = new user();
    $user->getUserByUsername($un);
} else if ($fn != "") {
    //echo "***";
    $user = new user();
    $user->getUserByFirstname($fn);
} else if ($ln != "") {
    //echo "****";
    $user = new user();
    $user->getUserByLastname($ln);
}

echo json_encode($user);
