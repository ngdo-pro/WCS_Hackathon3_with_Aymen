<?php

namespace UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var string
     */
    protected $firstname;

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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setEmail($email)
    {
        parent::setEmail($email);
        $userData = explode(".", $email);
        $userEmail = explode("@",$userData[1]);
        $testMail = explode(".", $userEmail[1]);
        if ($testMail[0] == 'insead') {
            $this->setUsername($email);
            $this->setFirstname($userData[0]);
            $this->setLastname($userEmail[0]);
        }
        else {

        }
    }

    protected $whatsapp;

    /**
     * Set whatsapp
     *
     * @param string $whatsapp
     *
     * @return User
     */
    public function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;

        return $this;
    }

    /**
     * Get whatsapp
     *
     * @return string
     */
    public function getWhatsapp()
    {
        return $this->whatsapp;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $trips;


    /**
     * Add trip
     *
     * @param \CabBundle\Entity\Course $trip
     *
     * @return User
     */
    public function addTrip(\CabBundle\Entity\Course $trip)
    {
        $this->trips[] = $trip;

        return $this;
    }

    /**
     * Remove trip
     *
     * @param \CabBundle\Entity\Course $trip
     */
    public function removeTrip(\CabBundle\Entity\Course $trip)
    {
        $this->trips->removeElement($trip);
    }

    /**
     * Get trips
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrips()
    {
        return $this->trips;
    }
}
