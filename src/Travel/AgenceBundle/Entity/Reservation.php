<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateReservation;

    /**
     * @var boolean
     */
    private $payement;

    /**
     * @var \Travel\AgenceBundle\Entity\Voyageur
     */
    private $voyageurReservation;

    /**
     * @var \Travel\AgenceBundle\Entity\Voyage
     */
    private $voyageReservation;

    /**
     * @var \Travel\AgenceBundle\Entity\Facture
     */
    private $factureReservation;


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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime 
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set payement
     *
     * @param boolean $payement
     * @return Reservation
     */
    public function setPayement($payement)
    {
        $this->payement = $payement;

        return $this;
    }

    /**
     * Get payement
     *
     * @return boolean 
     */
    public function getPayement()
    {
        return $this->payement;
    }

    /**
     * Set voyageurReservation
     *
     * @param \Travel\AgenceBundle\Entity\Voyageur $voyageurReservation
     * @return Reservation
     */
    public function setVoyageurReservation(\Travel\AgenceBundle\Entity\Voyageur $voyageurReservation = null)
    {
        $this->voyageurReservation = $voyageurReservation;

        return $this;
    }

    /**
     * Get voyageurReservation
     *
     * @return \Travel\AgenceBundle\Entity\Voyageur 
     */
    public function getVoyageurReservation()
    {
        return $this->voyageurReservation;
    }

    /**
     * Set voyageReservation
     *
     * @param \Travel\AgenceBundle\Entity\Voyage $voyageReservation
     * @return Reservation
     */
    public function setVoyageReservation(\Travel\AgenceBundle\Entity\Voyage $voyageReservation = null)
    {
        $this->voyageReservation = $voyageReservation;

        return $this;
    }

    /**
     * Get voyageReservation
     *
     * @return \Travel\AgenceBundle\Entity\Voyage 
     */
    public function getVoyageReservation()
    {
        return $this->voyageReservation;
    }

    /**
     * Set factureReservation
     *
     * @param \Travel\AgenceBundle\Entity\Facture $factureReservation
     * @return Reservation
     */
    public function setFactureReservation(\Travel\AgenceBundle\Entity\Facture $factureReservation = null)
    {
        $this->factureReservation = $factureReservation;

        return $this;
    }

    /**
     * Get factureReservation
     *
     * @return \Travel\AgenceBundle\Entity\Facture 
     */
    public function getFactureReservation()
    {
        return $this->factureReservation;
    }
}
