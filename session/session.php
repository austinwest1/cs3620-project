
<?php
require_once('./User/user.php');

class session
{
    // Methods
    function login($username, $password)
    {
        $user = new User();
        $loggedInUser = $user->checkLogin($username, $password);
        echo $loggedInUser;
        if ($loggedInUser != 0) {
            $_SESSION["loggedIn"] = true;
            $_SESSION["user_id"] = $loggedInUser;
            return true;
        } else {
            unset($_SESSION["loggedIn"]);
            unset($_SESSION["user_id"]);
            return false;
        }
    }

    function logout()
    {
        unset($_SESSION["loggedIn"]);
        unset($_SESSION["user_id"]);
    }
}
?>