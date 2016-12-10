<?php

namespace ServiceBundle\Entity;

/**
 * PriceRange
 */
class PriceRange
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $low;

    /**
     * @var string
     */
    private $medium;

    /**
     * @var string
     */
    private $high;


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
     * Set low
     *
     * @param string $low
     *
     * @return PriceRange
     */
    public function setLow($low)
    {
        $this->low = $low;

        return $this;
    }

    /**
     * Get low
     *
     * @return string
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Set medium
     *
     * @param string $medium
     *
     * @return PriceRange
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * Get medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Set high
     *
     * @param string $high
     *
     * @return PriceRange
     */
    public function setHigh($high)
    {
        $this->high = $high;

        return $this;
    }

    /**
     * Get high
     *
     * @return string
     */
    public function getHigh()
    {
        return $this->high;
    }
    /**
     * @var \ServiceBundle\Entity\Service
     */
    private $service;


    /**
     * Set service
     *
     * @param \ServiceBundle\Entity\Service $service
     *
     * @return PriceRange
     */
    public function setService(\ServiceBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \ServiceBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
