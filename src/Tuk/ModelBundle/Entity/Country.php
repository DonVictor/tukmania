<?php

namespace Tuk\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuk\ModelBundle\Entity\Country
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tuk\ModelBundle\Entity\CountryRepository")
 */
class Country
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