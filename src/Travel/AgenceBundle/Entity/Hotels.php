<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotels
 */
class Hotels
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomHotel;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var integer
     */
    private $nbreEtoile;

    /**
     * @var string
     */
    private $image;


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
     * Set nomHotel
     *
     * @param string $nomHotel
     * @return Hotels
     */
    public function setNomHotel($nomHotel)
    {
        $this->nomHotel = $nomHotel;

        return $this;
    }

    /**
     * Get nomHotel
     *
     * @return string 
     */
    public function getNomHotel()
    {
        return $this->nomHotel;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Hotels
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
     * Set nbreEtoile
     *
     * @param integer $nbreEtoile
     * @return Hotels
     */
    public function setNbreEtoile($nbreEtoile)
    {
        $this->nbreEtoile = $nbreEtoile;

        return $this;
    }

    /**
     * Get nbreEtoile
     *
     * @return integer 
     */
    public function getNbreEtoile()
    {
        return $this->nbreEtoile;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Hotels
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
