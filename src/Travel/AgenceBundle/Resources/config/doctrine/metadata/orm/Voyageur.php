<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Voyageur
 *
 * @ORM\Table(name="voyageur")
 * @ORM\Entity
 */
class Voyageur
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="e_mail", type="string", length=45, nullable=true)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="date", nullable=true)
     */
    private $dateInscription;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=true)
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Voyage", inversedBy="voyageur")
     * @ORM\JoinTable(name="voyageur_has_voyage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="voyageur_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="voyage_id", referencedColumnName="id")
     *   }
     * )
     */
    private $voyage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->voyage = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
