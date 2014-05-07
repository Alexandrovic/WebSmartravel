<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 *
 * @ORM\Table(name="voyage", indexes={@ORM\Index(name="fk_voyage_respo_agence1_idx", columns={"respo_agence_id"}), @ORM\Index(name="hotel-id", columns={"hotel_id"})})
 * @ORM\Entity
 */
class Voyage
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
     * @var string
     *
     * @ORM\Column(name="moyen_transport", type="string", length=45, nullable=true)
     */
    private $moyenTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=45, nullable=true)
     */
    private $destination;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_place", type="integer", nullable=true)
     */
    private $nbPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="programme", type="string", length=500, nullable=true)
     */
    private $programme;

    /**
     * @var string
     *
     * @ORM\Column(name="itineraire", type="string", length=300, nullable=true)
     */
    private $itineraire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date", nullable=true)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date", nullable=true)
     */
    private $dateRetour;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeSortie", type="string", nullable=true)
     */
    private $typesortie;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=true)
     */
    private $image;

    /**
     * @var \RespoAgence
     *
     * @ORM\ManyToOne(targetEntity="RespoAgence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="respo_agence_id", referencedColumnName="id")
     * })
     */
    private $respoAgence;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hotel_id", referencedColumnName="Id")
     * })
     */
    private $hotel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Voyageur", mappedBy="voyage")
     */
    private $voyageur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->voyageur = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
