<?php
namespace Project\EducationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="languages")
  */
class Language
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
    * @ORM\ManyToOne(targetEntity="Project\UserBundle\Entity\UserInformation", inversedBy="languages")
    * @ORM\JoinColumn(name="userinformation_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $user;
    
    /**
     * @var string $language;
     *
     * @ORM\Column(type="string")
     */   
    protected $language;
    
    /**
     * @var string $level;
     *
     * @ORM\Column(type="string")
     */   
    protected $level;
    
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
     * Set language
     *
     * @param string $language
     * @return Languages
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Languages
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set user
     *
     * @param \Project\UserBundle\Entity\UserInformation $user
     * @return Languages
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
