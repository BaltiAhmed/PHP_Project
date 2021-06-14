<?php


class Utilisateur
{

    private  $id = null;
    private  $nom = null;
    private  $prenom = null;
    private  $email = null;
    private  $login = null;
    private  $password = null;

    /**
     * Utilisateur constructor.
     * @param null $nom
     * @param null $prenom
     * @param null $email
     * @param null $login
     * @param null $password
     */
    public function __construct($nom, $prenom, $email, $login, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
    }


    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param null $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param null $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param null $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param null $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }




}