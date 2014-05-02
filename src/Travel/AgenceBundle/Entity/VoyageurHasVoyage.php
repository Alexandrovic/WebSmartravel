<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoyageurHasVoyage
 */
class VoyageurHasVoyage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Travel\AgenceBundle\Entity\Voyageur
     */
    private $voyageur;

    /**
     * @var \Travel\AgenceBundle\Entity\Voyage
     */
    private $voyage;


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
     * Set voyageur
     *
     * @param \Travel\AgenceBundle\Entity\Voyageur $voyageur
     * @return VoyageurHasVoyage
     */
    public function setVoyageur(\Travel\AgenceBundle\Entity\Voyageur $voyageur = null)
    {
        $this->voyageur = $voyageur;

        return $this;
    }

    /**
     * Get voyageur
     *
     * @return \Travel\AgenceBundle\Entity\Voyageur 
     */
    public function getVoyageur()
    {
        return $this->voyageur;
    }

    /**
     * Set voyage
     *
     * @param \Travel\AgenceBundle\Entity\Voyage $voyage
     * @return VoyageurHasVoyage
     */
    public function setVoyage(\Travel\AgenceBundle\Entity\Voyage $voyage = null)
    {
        $this->voyage = $voyage;

        return $this;
    }

    /**
     * Get voyage
     *
     * @return \Travel\AgenceBundle\Entity\Voyage 
     */
    public function getVoyage()
    {
        return $this->voyage;
    }
}
