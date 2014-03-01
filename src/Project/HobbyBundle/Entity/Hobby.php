<?php
namespace Project\HobbyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="hobbies")
  */
class Hobby
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
    * @var \Project\UserBundle\Entity\User $user;
    * 
    * @ORM\ManyToOne(targetEntity="Project\UserBundle\Entity\UserInformation", inversedBy="hobbies")
    * @ORM\JoinColumn(name="userinformation_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $user;
    
    /**
     * @var string $hobby;
     *
     * @ORM\Column(type="string")
     */   
    protected $hobby;
     
    /*
     * ToString
     */
    public function __toString()
    {
      return $this->getCompanyName();
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
     * Set hobby
     *
     * @param string $hobby
     * @return Hobby
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;

        return $this;
    }

    /**
     * Get hobby
     *
     * @return string 
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set user
     *
     * @param \Project\UserBundle\Entity\UserInformation $user
     * @return Hobby
     */
    public function setUser(\Project\UserBundle\Entity\UserInformation $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Project\UserBundle\Entity\UserInformation 
     */
    public function getUser()
    {
        return $this->user;
    }
}
