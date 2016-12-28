<?php

namespace BiagriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 */
class Offre
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
     * @var string
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
    private $prixOffre;

    /**
     * @var string
     */
    private $societe;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $cp;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $mail;


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
     * @return Offre
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
     * @param string $proteines
     * @return Offre
     */
    public function setProteines($proteines)
    {
        $this->proteines = $proteines;

        return $this;
    }

    /**
     * Get proteines
     *
     * @return string 
     */
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * Set ps
     *
     * @param integer $ps
     * @return Offre
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
     * @return Offre
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
     * @return Offre
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
     * @return Offre
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
     * Set prixOffre
     *
     * @param integer $prixOffre
     * @return Offre
     */
    public function setPrixOffre($prixOffre)
    {
        $this->prixOffre = $prixOffre;

        return $this;
    }

    /**
     * Get prixOffre
     *
     * @return integer 
     */
    public function getPrixOffre()
    {
        return $this->prixOffre;
    }

    /**
     * Set societe
     *
     * @param string $societe
     * @return Offre
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string 
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Offre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Offre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Offre
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Offre
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Offre
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Offre
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Offre
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
}
