<?php
require_once('./User/userDAO.php');

class User
{
    private $username;
    private $user_id;
    private $password;
    private $first_name;
    private $last_name;

    public function getUser($user_id)
    {
        $this->user_id = $user_id;

        $userDAO = new UserDAO();
        $userDAO->getUser($this);

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getFirstname()
    {
        return $this->first_name;
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
}
