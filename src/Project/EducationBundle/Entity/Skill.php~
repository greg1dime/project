<?php
namespace Project\EducationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="skills")
  */
class Skill
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
    * @var \Project\UserBundle\Entity\UserInformation $user;
    * 
    * @ORM\ManyToOne(targetEntity="Project\UserBundle\Entity\UserInformation", inversedBy="skills")
    * @ORM\JoinColumn(name="userinformation_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $user;
    
    /**
     * @var string $skill;
     *
     * @ORM\Column(type="string")
     */   
    protected $skill;
        
    /*
     * ToString
     */
    public function __toString()
    {
      return $this->getLanguage();
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
     * Set skill
     *
     * @param string $skill
     * @return Skills
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return string 
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set user
     *
     * @param \Project\UserBundle\Entity\UserInformation $user
     * @return Skills
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
