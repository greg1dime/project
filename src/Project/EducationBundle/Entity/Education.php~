<?php
namespace Project\EducationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

 /**
  * @ORM\Entity
  * @ORM\Table(name="educations")
  */
class Education
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
    * @ORM\ManyToOne(targetEntity="Project\UserBundle\Entity\UserInformation", inversedBy="education")
    * @ORM\JoinColumn(name="userinformation_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $user;
    
    /**
     * @var string $schoolName;
     *
     * @ORM\Column(type="string")
     */   
    protected $schoolName;
    
    /**
     * @var string $schoolType;
     *
     * @ORM\Column(type="string")
     */   
    protected $schoolType;
    
    /**
     * @var string $graduationYear;
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="numeric", message="Wprowadź poprawny rok")
     */   
    protected $graduationYear;
    
    /**
     * @var string $startYear;
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="numeric", message="Wprowadź poprawny rok")
     */   
    protected $startYear;
    
    /**
     * @var string $city;
     *
     * @ORM\Column(type="string")
     */   
    protected $city;

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
     * Set schoolName
     *
     * @param string $schoolName
     * @return Education
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    /**
     * Get schoolName
     *
     * @return string 
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set schoolType
     *
     * @param string $schoolType
     * @return Education
     */
    public function setSchoolType($schoolType)
    {
        $this->schoolType = $schoolType;

        return $this;
    }

    /**
     * Get schoolType
     *
     * @return string 
     */
    public function getSchoolType()
    {
        return $this->schoolType;
    }

    /**
     * Set graduationYear
     *
     * @param string $graduationYear
     * @return Education
     */
    public function setGraduationYear($graduationYear)
    {
        $this->graduationYear = $graduationYear;

        return $this;
    }

    /**
     * Get graduationYear
     *
     * @return string 
     */
    public function getGraduationYear()
    {
        return $this->graduationYear;
    }

    /**
     * Set startYear
     *
     * @param string $startYear
     * @return Education
     */
    public function setStartYear($startYear)
    {
        $this->startYear = $startYear;

        return $this;
    }

    /**
     * Get startYear
     *
     * @return string 
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Education
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
     * Set user
     *
     * @param \Project\UserBundle\Entity\UserInformation $user
     * @return Education
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
