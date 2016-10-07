<?php

namespace BiagriBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifs
 */
class Tarifs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $km;

    /**
     * @var int
     */
    private $rouen;

    /**
     * @var int
     */
    private $iDE;


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
     * Set km
     *
     * @param string $km
     * @return Tarifs
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return string 
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set rouen
     *
     * @param integer $rouen
     * @return Tarifs
     */
    public function setRouen($rouen)
    {
        $this->rouen = $rouen;

        return $this;
    }

    /**
     * Get rouen
     *
     * @return integer 
     */
    public function getRouen()
    {
        return $this->rouen;
    }

    /**
     * Set iDE
     *
     * @param integer $iDE
     * @return Tarifs
     */
    public function setIDE($iDE)
    {
        $this->iDE = $iDE;

        return $this;
    }

    /**
     * Get iDE
     *
     * @return integer 
     */
    public function getIDE()
    {
        return $this->iDE;
    }
}
