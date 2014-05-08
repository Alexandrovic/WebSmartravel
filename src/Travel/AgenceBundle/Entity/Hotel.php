<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_hotel", type="string", length=50, nullable=false)
     */
    private $nomHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_etoile", type="integer", nullable=false)
     */
    private $nbreEtoile;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=false)
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
     * @return Hotel
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
     * @return Hotel
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
     * @return Hotel
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
     * @return Hotel
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
    public function __toString() {
        return  $this->nomHotel;
        
    }

}
