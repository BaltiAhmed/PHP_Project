<?php

include '../Config.php';
require_once '../Models/Utilisateur.php';

class UtilisateurController
{


    /**
     * UtilisateurController constructor.
     */
    public function __construct()
    {
    }

    public function getAllUser()
    {
        $conn = Config::getConnexion();
        $sql = "SELECT * from user";
        $result = $conn->query($sql);

        return $result;
    }

    public function adduser(Utilisateur $u)
    {

        echo  $u->getNom();

       /* $conn = Config::getConnexion();
        $sql = "INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `login`, `password`) VALUES (NULL" + $u->getNom() + ", " + $u->getPrenom() + ", " + $u->getEmail() + "," + $u->getLogin() + "," + $u->getPassword() + ")";
        $conn->query($sql);*/

    }
}