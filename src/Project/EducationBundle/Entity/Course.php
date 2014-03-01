<?php

namespace Project\EducationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="courses")
  */
class Course
{
    /**
      * @var integer $id;
      * 
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
    private $id;
    
    /**
    * @var \Project\UserBundle\Entity\UserInformation $user;
    * 
    * @ORM\ManyToOne(targetEntity="Project\UserBundle\Entity\UserInformation", inversedBy="courses")
    * @ORM\JoinColumn(name="userinformation_id", referencedColumnName="id", onDelete="CASCADE")
    */
    protected $user;

    /**
     * @var string $course;
     *
     * @ORM\Column(type="string")
     */   
    private $course;

    /*
     * ToString
     */
    public function __toString()
    {
      return $this->getCourse();
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
     * Set course
     *
     * @param string $course
     * @return Course
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return string 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set user
     *
     * @param \Project\UserBundle\Entity\UserInformation $user
     * @return Course
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
