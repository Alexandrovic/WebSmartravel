<?php

namespace Travel\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 */
class Voyage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $moyenTransport;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var float
     */
    private $budget;

    /**
     * @var integer
     */
    private $nbPlace;

    /**
     * @var string
     */
    private $programme;

    /**
     * @var string
     */
    private $itineraire;

    /**
     * @var \DateTime
     */
    private $dateDepart;

    /**
     * @var \DateTime
     */
    private $dateRetour;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $typesortie;

    /**
     * @var \Travel\AgenceBundle\Entity\Hotels
     */
    private $hotelId;

    /**
     * @var \Travel\AgenceBundle\Entity\RespoAgence
     */
    private $voyageResponsable;


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
     * Set hotelId
     *
     * @param \Travel\AgenceBundle\Entity\Hotels $hotelId
     * @return Voyage
     */
    public function setHotelId(\Travel\AgenceBundle\Entity\Hotels $hotelId = null)
    {
        $this->hotelId = $hotelId;

        return $this;
    }

    /**
     * Get hotelId
     *
     * @return \Travel\AgenceBundle\Entity\Hotels 
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * Set voyageResponsable
     *
     * @param \Travel\AgenceBundle\Entity\RespoAgence $voyageResponsable
     * @return Voyage
     */
    public function setVoyageResponsable(\Travel\AgenceBundle\Entity\RespoAgence $voyageResponsable = null)
    {
        $this->voyageResponsable = $voyageResponsable;

        return $this;
    }

    /**
     * Get voyageResponsable
     *
     * @return \Travel\AgenceBundle\Entity\RespoAgence 
     */
    public function getVoyageResponsable()
    {
        return $this->voyageResponsable;
    }
}
