<?php

// class UserDAO
// {
//     public function getUser($user)
//     {
//         $user->setUsername("Austin");
//     }
// }
?>

<?php
class UserDAO
{
    function getUser($user)
    {
        require_once('./Utilities/connection.php');

        $sql = "SELECT first_name, last_name, username, user_id FROM users WHERE user_id =" . $user->getUserId();
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $user->setFirstName($row["first_name"]);
                $user->setLastName($row["last_name"]);
                $user->setUsername($row["username"]);
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

    function createUser($user)
    {
        echo "***";
        require_once('./Utilities/connection.php');

        $sql = "INSERT INTO cs3620_proj.users
        (`username`,
        `password`,
        `first_name`,
        `last_name`)
        VALUES
        ('" . $user->getUsername() . "',
        '" . $user->getPassword() . "',
        '" . $user->getFirstName() . "',
        '" . $user->getLastName() . "'
        );";
        $result = $conn->query($sql);

        $conn->close();

        echo "User created";
    }

    function deleteUser($username)
    {
        require_once('./Utilities/connection.php');

        $sql = "DELETE FROM cs3620_proj.users WHERE username = '" . $username . "';";

        $result = $conn->query($sql);

        $conn->close();

        echo "user deleted";
    }
}
?>
