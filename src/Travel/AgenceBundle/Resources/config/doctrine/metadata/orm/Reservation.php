<?php



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
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facture_id", referencedColumnName="id")
     * })
     */
    private $facture;


}
