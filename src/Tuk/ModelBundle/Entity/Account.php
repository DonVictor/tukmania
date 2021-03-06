<?php

namespace Tuk\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Tuk\ModelBundle\Entity\Account
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tuk\ModelBundle\Entity\AccountRepository")
 */
class Account
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
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string $nick
     *
     * @ORM\Column(name="nick", type="string", length=255)
     */
    private $nick;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer")
     */
    private $active = 1;

    /**
     * @var datetime $created_at
     * @ORM\Column(name="created_at", type="datetime", nullable="true")
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     * @ORM\Column(name="updated_at", type="datetime", nullable="true")
     */
    private $updated_at;

	  /**
	   * @ORM\OneToOne(targetEntity="User", inversedBy="Account", cascade={"all"})
	   * @ORM\JoinColumn(name="user", referencedColumnName="id", nullable="true")
	   */
    private $user;


		function __construct(){

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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
    		/*$Account = new Account();
				$factory = $this->container->get('security.encoder_factory');
				$encoder = $factory->getEncoder($Account);
				$password = $encoder->encodePassword($password, 'blabla');*/

        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set nick
     *
     * @param string $nick
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set active
     *
     * @param integer $active
     */
    public function setActive($active = 1)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
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

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set user
     *
     * @param integer $user
     */
    public function setUser($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }
    /**
     * Get user
     *
     * @return integer 
     */
    public function getUser()
    {
        return $this->user;
    }
}