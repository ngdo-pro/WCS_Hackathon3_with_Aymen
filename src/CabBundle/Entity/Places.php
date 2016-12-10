<?php

namespace CabBundle\Entity;

/**
 * Places
 */
class Places
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
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     *
     * @return Places
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departures;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $arrivals;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departures = new \Doctrine\Common\Collections\ArrayCollection();
        $this->arrivals = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departure
     *
     * @param \CabBundle\Entity\Course $departure
     *
     * @return Places
     */
    public function addDeparture(\CabBundle\Entity\Course $departure)
    {
        $this->departures[] = $departure;

        return $this;
    }

    /**
     * Remove departure
     *
     * @param \CabBundle\Entity\Course $departure
     */
    public function removeDeparture(\CabBundle\Entity\Course $departure)
    {
        $this->departures->removeElement($departure);
    }

    /**
     * Get departures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartures()
    {
        return $this->departures;
    }

    /**
     * Add arrival
     *
     * @param \CabBundle\Entity\Course $arrival
     *
     * @return Places
     */
    public function addArrival(\CabBundle\Entity\Course $arrival)
    {
        $this->arrivals[] = $arrival;

        return $this;
    }

    /**
     * Remove arrival
     *
     * @param \CabBundle\Entity\Course $arrival
     */
    public function removeArrival(\CabBundle\Entity\Course $arrival)
    {
        $this->arrivals->removeElement($arrival);
    }

    /**
     * Get arrivals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArrivals()
    {
        return $this->arrivals;
    }
}
