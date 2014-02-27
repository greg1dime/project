<?php
namespace Project\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="users")
  */
class User
{
     /**
      * @var integer $id;
      * 
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    protected $id;

     /**
      * @var string $login;
      * 
      * @ORM\Column(type="string", length=50)
      */
    protected $login;
    
     /**
      * @var string $password;
      * 
      * @ORM\Column(type="string", length=50, unique=true)
      */
    protected $password;
    
     /**
      * @var \Project\UserBundle\Entity\UserInformation $informations;
      * 
      * @ORM\OneToOne(targetEntity="UserInformation", mappedBy="user")
      **/
    protected $informations;

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
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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
     * Set informations
     *
     * @param \Project\UserBundle\Entity\UserInformation $informations
     * @return User
     */
    public function setInformations(\Project\UserBundle\Entity\UserInformation $informations = null)
    {
        $this->informations = $informations;

        return $this;
    }

    /**
     * Get informations
     *
     * @return \Project\UserBundle\Entity\UserInformation 
     */
    public function getInformations()
    {
        return $this->informations;
    }
}
