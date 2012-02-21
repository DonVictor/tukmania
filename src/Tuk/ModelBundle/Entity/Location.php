<?php

namespace Tuk\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuk\ModelBundle\Entity\Location
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tuk\ModelBundle\Entity\LocationRepository")
 */
class Location
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
     * @ORM\OneToOne(targetEntity="Country", inversedBy="countryId")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    private $country_id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $native_name
     *
     * @ORM\Column(name="native_name", type="string", length=255)
     */
    private $native_name;

    /**
     * @var string $coords
     *
     * @ORM\Column(name="coords", type="string", length=255)
     */
    private $coords;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;


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
     * Set country_id
     *
     * @param integer $countryId
     */
    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;
    }

    /**
     * Get country_id
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set native_name
     *
     * @param string $nativeName
     */
    public function setNativeName($nativeName)
    {
        $this->native_name = $nativeName;
    }

    /**
     * Get native_name
     *
     * @return string 
     */
    public function getNativeName()
    {
        return $this->native_name;
    }

    /**
     * Set coords
     *
     * @param string $coords
     */
    public function setCoords($coords)
    {
        $this->coords = $coords;
    }

    /**
     * Get coords
     *
     * @return string 
     */
    public function getCoords()
    {
        return $this->coords;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}