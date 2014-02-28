<?php
namespace Project\ExperienceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="experiences")
  */
class Experience
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
    * @ORM\ManyToOne(targetEntity="Project\UserBundle\Entity\UserInformation", inversedBy="experience")
    * @ORM\JoinColumn(name="userinformation_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $user;
    
    /**
     * @var string $companyName;
     *
     * @ORM\Column(type="string")
     */   
    protected $companyName;
    
    /**
     * @var string $position;
     *
     * @ORM\Column(type="string")
     */   
    protected $position;
    
    /**
     * @var datetime $sinceDate;
     *
     * @ORM\Column(type="datetime")
     */   
    protected $startDate;
    
    /**
     * @var datetime $startDate;
     *
     * @ORM\Column(type="datetime")
     */   
    protected $finishDate;
    
    /**
     * @var string $city;
     *
     * @ORM\Column(type="string")
     */   
    protected $city;

    /**
     * @var string $branch;
     *
     * @ORM\Column(type="string")
     */   
    protected $branch;
    
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
     * Set companyName
     *
     * @param string $companyName
     * @return Experience
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return Experience
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set startDate
     *
     * @param datetime $startDate
     * @return Experience
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return datetime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set finishDate
     *
     * @param datetime $finishDate
     * @return Experience
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;

        return $this;
    }

    /**
     * Get finishDate
     *
     * @return datetime 
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Experience
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set branch
     *
     * @param string $branch
     * @return Experience
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return string 
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Set user
     *
     * @param \Project\UserBundle\Entity\UserInformation $user
     * @return Experience
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
