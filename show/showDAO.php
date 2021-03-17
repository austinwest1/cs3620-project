<?php
class ShowDAO
{
    function getAllShows()
    {
        require_once('./Utilities/connection.php');
        require_once('./show/show.php');

        $sql = "SELECT show_id, show_name, show_description, show_rating FROM cs3620_proj.show;";
        $result = $conn->query($sql);

        $shows;
        $index = 0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $show = new Show();

                $show->setShowId($row["show_id"]);
                $show->setShowName($row["show_name"]);
                $show->setShowDescription($row["show_description"]);
                $show->setShowRating($row["show_rating"]);
                $shows[$index] = $show;
                $index++;
            }
        }
        $conn->close();

        return $shows;
    }

    function getShowsByUserId($userId)
    {
        require_once('./Utilities/connection.php');
        require_once('./show/show.php');

        $sql = "SELECT show_id, show_name, show_description, show_rating FROM cs3620_proj.show WHERE user_id = " . $userId;
        $result = $conn->query($sql);


        $shows = array();
        $index = 0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $show = new Show();

                $show->setShowId($row["show_id"]);
                $show->setShowName($row["show_name"]);
                $show->setShowDescription($row["show_description"]);
                $show->setShowRating($row["show_rating"]);
                $shows[$index] = $show;
                $index++;
            }
        }
        $conn->close();

        return $shows;
    }

    function addShow($show, $userid)
    {
        require_once('./Utilities/connection.php');

        $city = $conn->real_escape_string($city);

        $sql = "INSERT INTO cs3620_proj.show (`show_id`,
        `show_name`,
        `show_description`,
        `show_rating`,
        `user_id`) 
         VALUES 
        ('" . $id = $conn->real_escape_string($show->getShowId()) . "',
        '" . $name = $conn->real_escape_string($show->getShowName()) . "',
        '" . $desc = $conn->real_escape_string($show->getShowDescription()) . "',
        '" . $rating = $conn->real_escape_string($show->getShowRating()) . "',
        '" . $userid . "'
        );";

        $result = $conn->query($sql);

        $conn->close();
    }

    function deleteShow($uid, $sid)
    {
        require_once('./Utilities/connection.php');

        $sql = "DELETE FROM cs3620_proj.show WHERE user_id = " . $uid . " AND show_id = " . $sid . "";

        $result = $conn->query($sql);

        $conn->close();
    }
}
