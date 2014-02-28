<?php
namespace Project\EducationBundle\DataFixtures\ORM;

 use Doctrine\Common\DataFixtures\AbstractFixture;
 use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
 use Doctrine\Common\Persistence\ObjectManager;
 use Project\EducationBundle\Entity\Education;

 class LoadEducationData extends AbstractFixture implements OrderedFixtureInterface
 {
     /**
      * {@inheritDoc}
      */
     public function load(ObjectManager $manager)
     {
         $user1 = new Education();
         $user1->setUser($this->getReference('userinformation-1'));
         $user1->setSchoolName('schoolname1');
         $user1->setSchoolType('schooltype1');
         $user1->setGraduationYear('2011');
         $user1->setStartYear('2001');
         $user1->setCity('city1');
         
         $user2 = new Education();
         $user2->setUser($this->getReference('userinformation-2'));
         $user2->setSchoolName('schoolname2');
         $user2->setSchoolType('schooltype2');
         $user2->setGraduationYear('2012');
         $user2->setStartYear('2002');
         $user2->setCity('city2');

         $manager->persist($user1);
         $manager->persist($user2);
         $manager->flush();

         $this->addReference('education-1', $user1);
         $this->addReference('education-2', $user2);
     }

     /**
      * {@inheritDoc}
      */
     public function getOrder()
     {
         return 4; // the order in which fixtures will be loaded
     }
 }