<?php
require_once('./User/userDAO.php');

class User implements \JsonSerializable
{
    private $username;
    private $user_id;
    private $password;
    private $first_name;
    private $last_name;

    public function getUser($user_id)
    {
        $this->user_id = $user_id;

        $method = "user_id";

        $userDAO = new UserDAO();
        $userDAO->getUser($this, $user_id, $method);

        return $this;
    }

    public function getUserByFirstname($data)
    {
        $this->first_name = $data;

        $method = "first_name";

        $userDAO = new UserDAO();
        $userDAO->getUser($this, $data, $method);
    }

    public function getUserByLastname($data)
    {
        $this->last_name = $data;

        $method = "last_name";

        $userDAO = new UserDAO();
        $userDAO->getUser($this, $data, $method);
    }

    public function getUserByUsername($data)
    {
        $this->username = $data;

        $method = "username";

        $userDAO = new UserDAO();
        $userDAO->getUser($this, $data, $method);
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getFirstname()
    {
        return $this->first_name;
    }

    public function getFirstnameById($user_id)
    {
        $userDAO = new UserDAO();
        $userDAO->getFirstname($user_id);
    }

    public function getLastname()
    {
        return $this->last_name;
    }

    public function setFirstname($firstname)
    {
        $this->first_name = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->last_name = $lastname;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = hash("sha256", $password);
        //echo $this->password;
    }

    public function getUserID()
    {
        return $this->user_id;
    }

    public function getPassword()
    {
        return $this->password;
    }

    function createUser()
    {
        $userDAO = new UserDAO();
        $userDAO->createUser($this);
    }

    function deleteUser($username)
    {
        $userDAO = new UserDAO();
        $userDAO->deleteUser($username);
    }

    function checkLogin($username, $password)
    {
        $userDAO = new userDAO();
        return $userDAO->checkLogin($username, $password);
    }

    public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        return $vars;
    }
}
