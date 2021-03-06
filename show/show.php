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
    function addShow()
    {
        $showDAO = new ShowDAO();
        $showDAO->addShow($this);
    }

    public function getMyShows()
    {
        $showDAO = new ShowDAO();
        return $showDAO->getAllShows();
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
