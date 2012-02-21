<?php

namespace Tuk\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuk\ModelBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tuk\ModelBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $names
     *
     * @ORM\Column(name="names", type="string", length=255)
     */
    private $names;


    /**
     * @var string $last_names
     *
     * @ORM\Column(name="last_names", type="string", length=255)
     */
    private $last_names;

    /**
     * @var string $dni
     *
     * @ORM\Column(name="dni", type="string", length=255)
     */
    private $dni;

    /**
     * @var datetime $birthday_at
     *
     * @ORM\Column(name="birthday_at", type="date")
     */
    private $birthday_at;

    /**
     * @var integer $location_id
     *
     * @ORM\Column(name="location_id", type="integer")
     */
    private $location_id;


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
     * Set name
     *
     * @param string $names
     */
    public function setNames($names)
    {
        $this->names = $names;
    }

    /**
     * Get names
     *
     * @return string 
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Set last_names
     *
     * @param string $lastNames
     */
    public function setLastNames($lastNames)
    {
        $this->last_names = $lastNames;
    }

    /**
     * Get last_names
     *
     * @return string 
     */
    public function getLastNames()
    {
        return $this->last_names;
    }

    /**
     * Set dni
     *
     * @param string $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set birthday_at
     *
     * @param datetime $birthdayAt
     */
    public function setBirthdayAt($birthdayAt)
    {
        $this->birthday_at = $birthdayAt;
    }

    /**
     * Get birthday_at
     *
     * @return datetime 
     */
    public function getBirthdayAt()
    {
        return $this->birthday_at;
    }

    /**
     * Set location_id
     *
     * @param integer $locationId
     */
    public function setLocationId($locationId)
    {
        $this->location_id = $locationId;
    }

    /**
     * Get location_id
     *
     * @return integer 
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
}