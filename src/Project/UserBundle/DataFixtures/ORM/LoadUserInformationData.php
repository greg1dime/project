<?php
namespace Project\UserBundle\DataFixtures\ORM;

 use Doctrine\Common\DataFixtures\AbstractFixture;
 use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
 use Doctrine\Common\Persistence\ObjectManager;
 use Project\UserBundle\Entity\UserInformation;

 class LoadUserInformationData extends AbstractFixture implements OrderedFixtureInterface
 {
     /**
      * {@inheritDoc}
      */
     public function load(ObjectManager $manager)
     {
         $user1 = new UserInformation();
         $user1->setUser($this->getReference('user-1'));
         $user1->setFirstName('firstname1');
         $user1->setLastName('lastname1');
         $user1->setBirthDate(new \DateTime('2001-01-01'));
         $user1->setBirthPlace('birthplace1');
         $user1->setStreet('street1');
         $user1->setHouseNo('1');
         $user1->setApartmentNo('1');
         $user1->setCode('code1');
         $user1->setCity('city1');
         $user1->setCountry('country1');
         $user1->setPhone('1111111');
         $user1->setEmail('email1');
         
         $user2 = new UserInformation();
         $user2->setUser($this->getReference('user-2'));
         $user2->setFirstName('firstname2');
         $user2->setLastName('lastname2');
         $user2->setBirthDate(new \DateTime('2001-01-01'));
         $user2->setBirthPlace('birthplace2');
         $user2->setStreet('street2');
         $user2->setHouseNo('2');
         $user2->setApartmentNo('2');
         $user2->setCode('code2');
         $user2->setCity('city2');
         $user2->setCountry('country2');
         $user2->setPhone('2222222');
         $user2->setEmail('email2');

         $manager->persist($user1);
         $manager->persist($user2);
         $manager->flush();

         $this->setReference('userinformation-1', $user1);
         $this->addReference('userinformation-2', $user2);
     }

     /**
      * {@inheritDoc}
      */
     public function getOrder()
     {
         return 2; // the order in which fixtures will be loaded
     }
 }