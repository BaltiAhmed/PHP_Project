<?php

include 'Config.php';
require_once 'Club.php';

class ClubController
{


    /**
     * ClubController constructor.
     */
    public function __construct()
    {
    }

    public function getAllClub()
    {
        $conn = Config::getConnexion();
        $sql = "SELECT * from club";
        $result = $conn->query($sql);

        return $result;
    }

    public function deleteClub($id)
    {
        $conn = Config::getConnexion();
        $sql = 'DELETE FROM club WHERE id='.$id;
        $conn->query($sql);
    }
}