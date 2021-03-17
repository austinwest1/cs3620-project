<?php

require_once('./show/showDAO.php');
class Show implements JsonSerializable
{
    //attributes
    private $show_name;
    private $show_id;
    private $show_description;
    private $show_rating;

    //methods
    function addShow($user_id)
    {
        $showDAO = new ShowDAO();
        $showDAO->addShow($this, $user_id);
    }

    public function getMyShows($user_id)
    {
        $showDAO = new ShowDAO();
        return $showDAO->getShowsByUserId($user_id);
    }

    public function deleteShow($user_id, $show_id)
    {
        $showDAO = new ShowDAO();
        return $showDAO->deleteShow($user_id, $show_id);
    }

    public function setShowName($showName)
    {
        $this->show_name = $showName;
    }

    public function getShowName()
    {
        return $this->show_name;
    }

    public function setShowId($showid)
    {
        $this->show_id = $showid;
    }

    public function getShowId()
    {
        return $this->show_id;
    }

    public function setShowDescription($showDescription)
    {
        $this->show_description = $showDescription;
    }

    public function getShowDescription()
    {
        return $this->show_description;
    }

    public function setShowRating($showRating)
    {
        $this->show_rating = $showRating;
    }

    public function getShowRating()
    {
        return $this->show_rating;
    }

    public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        return $vars;
    }
}
