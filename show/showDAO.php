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

    function addShow($show)
    {
        require_once('./Utilities/connection.php');

        $sql = "INSERT INTO cs3620_proj.show (`show_id`,
        `show_name`,
        `show_description`,
        `show_rating`) 
         VALUES 
        ('" . $show->getShowId() . "',
        '" . $show->getShowName() . "',
        '" . $show->getShowDescription() . "',
        '" . $show->getShowRating() . "'
        );";

        $result = $conn->query($sql);

        $conn->close();
    }
}
