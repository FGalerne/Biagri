<?php

namespace BiagriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 */
class Offer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $produits;

    /**
     * @var int
     */
    private $proteines;

    /**
     * @var int
     */
    private $ps;

    /**
     * @var int
     */
    private $humidite;

    /**
     * @var int
     */
    private $hagberg;

    /**
     * @var string
     */
    private $livraison;

    /**
     * @var int
     */
    private $prix;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set produits
     *
     * @param string $produits
     * @return Offer
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return string 
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set proteines
     *
     * @param integer $proteines
     * @return Offer
     */
    public function setProteines($proteines)
    {
        $this->proteines = $proteines;

        return $this;
    }

    /**
     * Get proteines
     *
     * @return integer 
     */
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * Set ps
     *
     * @param integer $ps
     * @return Offer
     */
    public function setPs($ps)
    {
        $this->ps = $ps;

        return $this;
    }

    /**
     * Get ps
     *
     * @return integer 
     */
    public function getPs()
    {
        return $this->ps;
    }

    /**
     * Set humidite
     *
     * @param integer $humidite
     * @return Offer
     */
    public function setHumidite($humidite)
    {
        $this->humidite = $humidite;

        return $this;
    }

    /**
     * Get humidite
     *
     * @return integer 
     */
    public function getHumidite()
    {
        return $this->humidite;
    }

    /**
     * Set hagberg
     *
     * @param integer $hagberg
     * @return Offer
     */
    public function setHagberg($hagberg)
    {
        $this->hagberg = $hagberg;

        return $this;
    }

    /**
     * Get hagberg
     *
     * @return integer 
     */
    public function getHagberg()
    {
        return $this->hagberg;
    }

    /**
     * Set livraison
     *
     * @param string $livraison
     * @return Offer
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return string 
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Offer
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
