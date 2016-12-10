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

    protected $lastname;

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
            $this->setFirstName($userData[0]);
            $this->setLastname($userEmail[0]);
        }
        else {

        }
    }
}