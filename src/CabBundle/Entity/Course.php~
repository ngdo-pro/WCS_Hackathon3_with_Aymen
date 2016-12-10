<?php

namespace CabBundle\Entity;

/**
 * Course
 */
class Course
{
    public function __toString()
    {
     return $this->name;   // TODO: Implement __toString() method.
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $departureDate;

    /**
     * @var int
     */
    private $seatsAvailable;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departureDate
     *
     * @param \DateTime $departureDate
     *
     * @return Course
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get departureDate
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set seatsAvailable
     *
     * @param integer $seatsAvailable
     *
     * @return Course
     */
    public function setSeatsAvailable($seatsAvailable)
    {
        $this->seatsAvailable = $seatsAvailable;

        return $this;
    }

    /**
     * Get seatsAvailable
     *
     * @return int
     */
    public function getSeatsAvailable()
    {
        return $this->seatsAvailable;
    }
    /**
     * @var \CabBundle\Entity\Places
     */
    private $departure;

    /**
     * @var \CabBundle\Entity\Places
     */
    private $arrival;


    /**
     * Set departure
     *
     * @param \CabBundle\Entity\Places $departure
     *
     * @return Course
     */
    public function setDeparture(\CabBundle\Entity\Places $departure = null)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \CabBundle\Entity\Places
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param \CabBundle\Entity\Places $arrival
     *
     * @return Course
     */
    public function setArrival(\CabBundle\Entity\Places $arrival = null)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \CabBundle\Entity\Places
     */
    public function getArrival()
    {
        return $this->arrival;
    }
}
