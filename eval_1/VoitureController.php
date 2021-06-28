<?php

include 'Config.php';
require_once 'Voiture.php';

class VoitureController
{


    /**
     * VoitureController constructor.
     */
    public function __construct()
    {
    }

    public function getVoiture()
    {
        $conn = Config::getConnexion();
        $sql = "SELECT * from voiture";
        $result = $conn->query($sql);

        return $result;
    }

    public function ajouterVoiture( $marque, $vitesse, $puissance)
    {

        $conn = Config::getConnexion();
         $sql = "INSERT INTO `voiture` (`id`, `marque`, `vitesse`, `puissance`) VALUES (null , '".$marque."', '".$vitesse."', '".$puissance."')";
         $conn->query($sql);

    }
}