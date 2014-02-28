<?php
namespace Project\ExperienceBundle\DataFixtures\ORM;

 use Doctrine\Common\DataFixtures\AbstractFixture;
 use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
 use Doctrine\Common\Persistence\ObjectManager;
 use Project\ExperienceBundle\Entity\Experience;

 class LoadExperienceData extends AbstractFixture implements OrderedFixtureInterface
 {
     /**
      * {@inheritDoc}
      */
     public function load(ObjectManager $manager)
     {
         $user1 = new Experience();
         $user1->setUser($this->getReference('userinformation-1'));
         $user1->setCompanyName('company1');
         $user1->setPosition('position1');
         $user1->setStartDate(new \DateTime());
         $user1->setFinishDate(new \DateTime());
         $user1->setCity('city1');
         $user1->setBranch('branch1');
         
         $user2 = new Experience();
         $user2->setUser($this->getReference('userinformation-2'));
         $user2->setCompanyName('company2');
         $user2->setPosition('position2');
         $user1->setStartDate(new \DateTime());
         $user1->setFinishDate(new \DateTime());
         $user2->setCity('city2');
         $user2->setBranch('branch2');

         $manager->persist($user1);
         $manager->persist($user2);
         $manager->flush();

         $this->addReference('experience-1', $user1);
         $this->addReference('experience-2', $user2);
     }

     /**
      * {@inheritDoc}
      */
     public function getOrder()
     {
         return 3; // the order in which fixtures will be loaded
     }
 }