<?php
class UserDAO
{
    function getUser($user, $data, $method)
    {
        require_once('./Utilities/connection.php');

        $sql = "SELECT first_name, last_name, username, user_id FROM users WHERE " . $method . "=" . "'$data'";
        //echo $sql;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $user->setFirstName($row["first_name"]);
                $user->setLastName($row["last_name"]);
                $user->setUsername($row["username"]);
            }
        } else {
            // echo "0 results";
        }
        $conn->close();
    }

    function checkLogin($passedinusername, $passedinpassword)
    {
        require_once('./Utilities/connection.php');
        $user_id = 0;
        $sql = "SELECT user_id FROM users WHERE username = '" . $passedinusername . "' AND password = '" . hash("sha256", trim($passedinpassword)) . "'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user_id = $row["user_id"];
            }
        } else {
            //echo "0 results";
        }
        $conn->close();
        return $user_id;
    }

    function createUser($user)
    {
        require_once('./Utilities/connection.php');

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO cs3620_proj.users (`username`,
        `password`,
        `first_name`,
        `last_name`) VALUES (?, ?, ?, ?)");

        $un = $user->getUsername();
        $pw = $user->getPassword();
        $fn = $user->getFirstName();
        $ln = $user->getLastName();

        $stmt->bind_param("ssss", $un, $pw, $fn, $ln);
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }

    function deleteUser($username)
    {
        require_once('./Utilities/connection.php');

        $sql = "DELETE FROM cs3620_proj.users WHERE username = '" . $username . "';";

        $result = $conn->query($sql);

        $conn->close();

        echo "user deleted";
    }

    function setSessionFirstname($loggedInUser)
    {
        // $servername = "austinwest-cs3620db.mysql.database.azure.com";
        // session_start();

        // $un = (isset($_SESSION["SQLUSER"]) ? $_SESSION["SQLUSER"] : $_ENV['SQLUSER']);
        // $password = (isset($_SESSION["SQLPW"]) ? $_SESSION["SQLPW"] : $_ENV['SQLPW']);
        // $dbname = "cs3620_proj";

        // // Create connection
        // $conn = new mysqli($servername, $un, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        include('./Utilities/connection.php');
        //global $conn;
        $fn = "";
        $sql = "SELECT first_name FROM users WHERE user_id = '" . $loggedInUser . "';";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $fn = $row["first_name"];
            }
        } else {
            //echo "0 results";
        }
        $conn->close();
        return $fn;
    }

    function getFirstname($user, $userid)
    {
        require_once('./Utilities/connection.php');

        $sql = "SELECT first_name FROM users WHERE user_id = " . $userid;
        //echo $sql;
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
}
