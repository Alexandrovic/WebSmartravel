<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 *
 * @ORM\Table(name="voyage", indexes={@ORM\Index(name="fk_voyage_respo_agence1_idx", columns={"respo_agence_id"}), @ORM\Index(name="hotel-id", columns={"hotel-id"})})
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
     * @ORM\Column(name="programme", type="string", length=45, nullable=true)
     */
    private $programme;

    /**
     * @var string
     *
     * @ORM\Column(name="itineraire", type="string", length=45, nullable=true)
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
     *   @ORM\JoinColumn(name="hotel-id", referencedColumnName="Id")
     * })
     */
    private $hotelId;

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
     * Set moyenTransport
     *
     * @param string $moyenTransport
     * @return Voyage
     */
    public function setMoyenTransport($moyenTransport)
    {
        $this->moyenTransport = $moyenTransport;

        return $this;
    }

    /**
     * Get moyenTransport
     *
     * @return string 
     */
    public function getMoyenTransport()
    {
        return $this->moyenTransport;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Voyage
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set budget
     *
     * @param float $budget
     * @return Voyage
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     * @return Voyage
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return integer 
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * Set programme
     *
     * @param string $programme
     * @return Voyage
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return string 
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set itineraire
     *
     * @param string $itineraire
     * @return Voyage
     */
    public function setItineraire($itineraire)
    {
        $this->itineraire = $itineraire;

        return $this;
    }

    /**
     * Get itineraire
     *
     * @return string 
     */
    public function getItineraire()
    {
        return $this->itineraire;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     * @return Voyage
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     * @return Voyage
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime 
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Voyage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set typesortie
     *
     * @param string $typesortie
     * @return Voyage
     */
    public function setTypesortie($typesortie)
    {
        $this->typesortie = $typesortie;

        return $this;
    }

    /**
     * Get typesortie
     *
     * @return string 
     */
    public function getTypesortie()
    {
        return $this->typesortie;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Voyage
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

    /**
     * Set respoAgence
     *
     * @param \Travel\AgenceBundle\Entity\RespoAgence $respoAgence
     * @return Voyage
     */
    public function setRespoAgence(\Travel\AgenceBundle\Entity\RespoAgence $respoAgence = null)
    {
        $this->respoAgence = $respoAgence;

        return $this;
    }

    /**
     * Get respoAgence
     *
     * @return \Travel\AgenceBundle\Entity\RespoAgence 
     */
    public function getRespoAgence()
    {
        return $this->respoAgence;
    }

    /**
     * Set hotelId
     *
     * @param \Travel\AgenceBundle\Entity\Hotel $hotelId
     * @return Voyage
     */
    public function setHotelId(\Travel\AgenceBundle\Entity\Hotel $hotelId = null)
    {
        $this->hotelId = $hotelId;

        return $this;
    }

    /**
     * Get hotelId
     *
     * @return \Travel\AgenceBundle\Entity\Hotel 
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * Add voyageur
     *
     * @param \Travel\AgenceBundle\Entity\Voyageur $voyageur
     * @return Voyage
     */
    public function addVoyageur(\Travel\AgenceBundle\Entity\Voyageur $voyageur)
    {
        $this->voyageur[] = $voyageur;

        return $this;
    }

    /**
     * Remove voyageur
     *
     * @param \Travel\AgenceBundle\Entity\Voyageur $voyageur
     */
    public function removeVoyageur(\Travel\AgenceBundle\Entity\Voyageur $voyageur)
    {
        $this->voyageur->removeElement($voyageur);
    }

    /**
     * Get voyageur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVoyageur()
    {
        return $this->voyageur;
    }
}
