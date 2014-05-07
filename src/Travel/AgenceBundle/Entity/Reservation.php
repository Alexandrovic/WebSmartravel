<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_reservation_voyageur_idx", columns={"voyageur_id"}), @ORM\Index(name="fk_reservation_voyage1_idx", columns={"voyage_id"}), @ORM\Index(name="fk_reservation_facture1_idx", columns={"facture_id"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="date", nullable=true)
     */
    private $dateReservation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payement", type="boolean", nullable=true)
     */
    private $payement;

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facture_id", referencedColumnName="id")
     * })
     */
    private $facture;

    /**
     * @var \Voyageur
     *
     * @ORM\ManyToOne(targetEntity="Voyageur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="voyageur_id", referencedColumnName="id")
     * })
     */
    private $voyageur;

    /**
     * @var \Voyage
     *
     * @ORM\ManyToOne(targetEntity="Voyage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="voyage_id", referencedColumnName="id")
     * })
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
     * Set facture
     *
     * @param \Travel\AgenceBundle\Entity\Facture $facture
     * @return Reservation
     */
    public function setFacture(\Travel\AgenceBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \Travel\AgenceBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set voyageur
     *
     * @param \Travel\AgenceBundle\Entity\Voyageur $voyageur
     * @return Reservation
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
     * @return Reservation
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
