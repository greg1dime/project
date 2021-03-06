<?php
namespace Project\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use \Doctrine\Common\Collections\ArrayCollection;

 /**
  * @ORM\Entity
  * @ORM\Table(name="users_informations")
  */
class UserInformation
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
     * @var User $user;
     * 
     * @ORM\OneToOne(targetEntity="User", inversedBy="informations")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    protected $user; 
    
    /**
     * @var string $firstName;
     *
     * @ORM\Column(type="string", length=50)
     */   
    protected $firstName;
    
    /**
     * @var string $lastName;
     *
     * @ORM\Column(type="string", length=50)
     */
    protected $lastName;
    
    /**
     * @var date $birthDate;
     *
     * @ORM\Column(type="date")
     */
    protected $birthDate;
    
    /**
     * @var string $birthPlace;
     *
     * @ORM\Column(type="string")
     */
    protected $birthPlace;
    
    /**
     * @var string $street;
     * 
     * @ORM\Column(type="string")
     */
    protected $street;
    
    /**
     * @var string $house_no;
     * 
     * @ORM\Column(type="string")
     * @Assert\Type(type="numeric", message="Wprowadź poprawną liczbę")
     */  
    protected $house_no;
    
    /**
     * @var string $apartment_no;
     * 
     * @ORM\Column(type="string")
     * @Assert\Type(type="numeric", message="Wprowadź poprawną liczbę")
     */  
    protected $apartment_no;
    
    /**
     * @var string $code;
     * 
     * @ORM\Column(type="string")
     */
    protected $code;
    
    /**
     * @var string $city;
     * 
     * @ORM\Column(type="string")
     */
    protected $city;
    
    /**
     * @var string $country;
     * 
     * @ORM\Column(type="string")
     */
    protected $country;
    
    /**
     * @var string $phone;
     * 
     * @ORM\Column(type="string")
     */
    protected $phone;
    
    /**
     * @var string $email;
     * 
     * @ORM\Column(type="string")
     */
    protected $email;
    
     /**
      * @var ArrayCollection $experience;
      * 
      * @ORM\OneToMany(targetEntity="Project\ExperienceBundle\Entity\Experience", mappedBy="user")
      */
    protected $experience;
    
    /**
      * @var ArrayCollection $education;
      * 
      * @ORM\OneToMany(targetEntity="Project\EducationBundle\Entity\Education", mappedBy="user")
      */
    protected $education;
    
    /**
      * @var ArrayCollection $languages;
      * 
      * @ORM\OneToMany(targetEntity="Project\EducationBundle\Entity\Language", mappedBy="user")
      */
    protected $languages;
    
    /**
      * @var ArrayCollection $courses;
      * 
      * @ORM\OneToMany(targetEntity="Project\EducationBundle\Entity\Course", mappedBy="user")
      */
    protected $courses;
    
    /**
      * @var ArrayCollection $skills;
      * 
      * @ORM\OneToMany(targetEntity="Project\EducationBundle\Entity\Skill", mappedBy="user")
      */
    protected $skills;
    
     /**
      * @var ArrayCollection $hobbies;
      * 
      * @ORM\OneToMany(targetEntity="Project\HobbyBundle\Entity\Hobby", mappedBy="user")
      */
    protected $hobbies;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->experience = new ArrayCollection();
        $this->education = new ArrayCollection();
    }
    
    /*
     * ToString
     */
    public function __toString()
    {
      return $this->getFirstName();
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
     * Set firstName
     *
     * @param string $firstName
     * @return UserInformation
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return UserInformation
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return UserInformation
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set birthPlace
     *
     * @param string $birthPlace
     * @return UserInformation
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * Get birthPlace
     *
     * @return string 
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return UserInformation
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set house_no
     *
     * @param string $houseNo
     * @return UserInformation
     */
    public function setHouseNo($houseNo)
    {
        $this->house_no = $houseNo;

        return $this;
    }

    /**
     * Get house_no
     *
     * @return string 
     */
    public function getHouseNo()
    {
        return $this->house_no;
    }

    /**
     * Set apartment_no
     *
     * @param string $apartmentNo
     * @return UserInformation
     */
    public function setApartmentNo($apartmentNo)
    {
        $this->apartment_no = $apartmentNo;

        return $this;
    }

    /**
     * Get apartment_no
     *
     * @return string 
     */
    public function getApartmentNo()
    {
        return $this->apartment_no;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return UserInformation
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return UserInformation
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
     * Set country
     *
     * @param string $country
     * @return UserInformation
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return UserInformation
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return UserInformation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set user
     *
     * @param \Project\UserBundle\Entity\User $user
     * @return UserInformation
     */
    public function setUser(\Project\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Project\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add experience
     *
     * @param \Project\ExperienceBundle\Entity\Experience $experience
     * @return UserInformation
     */
    public function addExperience(\Project\ExperienceBundle\Entity\Experience $experience)
    {
        $this->experience[] = $experience;

        return $this;
    }

    /**
     * Remove experience
     *
     * @param \Project\ExperienceBundle\Entity\Experience $experience
     */
    public function removeExperience(\Project\ExperienceBundle\Entity\Experience $experience)
    {
        $this->experience->removeElement($experience);
    }

    /**
     * Get experience
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Add education
     *
     * @param \Project\EducationBundle\Entity\Education $education
     * @return UserInformation
     */
    public function addEducation(\Project\EducationBundle\Entity\Education $education)
    {
        $this->education[] = $education;

        return $this;
    }

    /**
     * Remove education
     *
     * @param \Project\EducationBundle\Entity\Education $education
     */
    public function removeEducation(\Project\EducationBundle\Entity\Education $education)
    {
        $this->education->removeElement($education);
    }

    /**
     * Get education
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Add languages
     *
     * @param \Project\EducationBundle\Entity\Languages $languages
     * @return UserInformation
     */
    public function addLanguage(\Project\EducationBundle\Entity\Languages $languages)
    {
        $this->languages[] = $languages;

        return $this;
    }

    /**
     * Remove languages
     *
     * @param \Project\EducationBundle\Entity\Languages $languages
     */
    public function removeLanguage(\Project\EducationBundle\Entity\Languages $languages)
    {
        $this->languages->removeElement($languages);
    }

    /**
     * Get languages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Add courses
     *
     * @param \Project\EducationBundle\Entity\Courses $courses
     * @return UserInformation
     */
    public function addCourse(\Project\EducationBundle\Entity\Courses $courses)
    {
        $this->courses[] = $courses;

        return $this;
    }

    /**
     * Remove courses
     *
     * @param \Project\EducationBundle\Entity\Courses $courses
     */
    public function removeCourse(\Project\EducationBundle\Entity\Courses $courses)
    {
        $this->courses->removeElement($courses);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Add skills
     *
     * @param \Project\EducationBundle\Entity\Skill $skills
     * @return UserInformation
     */
    public function addSkill(\Project\EducationBundle\Entity\Skill $skills)
    {
        $this->skills[] = $skills;

        return $this;
    }

    /**
     * Remove skills
     *
     * @param \Project\EducationBundle\Entity\Skill $skills
     */
    public function removeSkill(\Project\EducationBundle\Entity\Skill $skills)
    {
        $this->skills->removeElement($skills);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Add hobbies
     *
     * @param \Project\HobbyBundle\Entity\Hobby $hobbies
     * @return UserInformation
     */
    public function addHobby(\Project\HobbyBundle\Entity\Hobby $hobbies)
    {
        $this->hobbies[] = $hobbies;

        return $this;
    }

    /**
     * Remove hobbies
     *
     * @param \Project\HobbyBundle\Entity\Hobby $hobbies
     */
    public function removeHobby(\Project\HobbyBundle\Entity\Hobby $hobbies)
    {
        $this->hobbies->removeElement($hobbies);
    }

    /**
     * Get hobbies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }
}
