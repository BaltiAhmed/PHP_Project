<?php


class Voiture
{
    private $id;
    private $marque;
    private $vitesse;
    private $puissance;

    /**
     * Voiture constructor.
     * @param $id
     * @param $marque
     * @param $vitesse
     * @param $puissance
     */
    public function __construct($id, $marque, $vitesse, $puissance)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->vitesse = $vitesse;
        $this->puissance = $puissance;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance): void
    {
        $this->puissance = $puissance;
    }




}