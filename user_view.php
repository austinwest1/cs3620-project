<?php
require_once('./header.php');
?>

<?php
require_once('./User/user.php');

$user = new user();
$user->getUser(2);

echo $user->getUsername();
echo "<br />";
echo $user->getFirstname();
echo "<br />";
echo $user->getLastname();
?>

<?php
require_once('./footer.php');
