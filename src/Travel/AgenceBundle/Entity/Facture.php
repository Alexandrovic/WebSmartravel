<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="id_reservation", columns={"reservation_id"})})
 * @ORM\Entity
 */
class Facture
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
     * @var float
     *
     * @ORM\Column(name="somme_facture", type="float", precision=10, scale=0, nullable=true)
     */
    private $sommeFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_payement_facture", type="date", nullable=true)
     */
    private $datePayementFacture;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reservation_id", referencedColumnName="id")
     * })
     */
    private $reservation;



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
     * Set sommeFacture
     *
     * @param float $sommeFacture
     * @return Facture
     */
    public function setSommeFacture($sommeFacture)
    {
        $this->sommeFacture = $sommeFacture;

        return $this;
    }

    /**
     * Get sommeFacture
     *
     * @return float 
     */
    public function getSommeFacture()
    {
        return $this->sommeFacture;
    }

    /**
     * Set datePayementFacture
     *
     * @param \DateTime $datePayementFacture
     * @return Facture
     */
    public function setDatePayementFacture($datePayementFacture)
    {
        $this->datePayementFacture = $datePayementFacture;

        return $this;
    }

    /**
     * Get datePayementFacture
     *
     * @return \DateTime 
     */
    public function getDatePayementFacture()
    {
        return $this->datePayementFacture;
    }

    /**
     * Set reservation
     *
     * @param \Travel\AgenceBundle\Entity\Reservation $reservation
     * @return Facture
     */
    public function setReservation(\Travel\AgenceBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \Travel\AgenceBundle\Entity\Reservation 
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
