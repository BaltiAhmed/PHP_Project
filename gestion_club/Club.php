<?php


class Club
{
    private $id = null;
    private $nom = null;
    private $description = null;
    private $adresse = null;
    private $domaine = null;

    /**
     * Club constructor.
     * @param null $id
     * @param null $nom
     * @param null $description
     * @param null $adresse
     * @param null $domaine
     */
    public function __construct($id, $nom, $description, $adresse, $domaine)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->domaine = $domaine;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param null $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return null
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param null $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return null
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param null $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }




}