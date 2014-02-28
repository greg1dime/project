<?php
namespace Project\UserBundle\DataFixtures\ORM;

 use Doctrine\Common\DataFixtures\AbstractFixture;
 use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
 use Doctrine\Common\Persistence\ObjectManager;
 use Project\UserBundle\Entity\User;

 class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
 {
     /**
      * {@inheritDoc}
      */
     public function load(ObjectManager $manager)
     {
         $user1 = new User();
         $user1->setLogin('login1');
         $user1->setPassword('password1');
         
         $user2 = new User();
         $user2->setLogin('login2');
         $user2->setPassword('password2');

         $manager->persist($user1);
         $manager->persist($user2);
         $manager->flush();

         $this->addReference('user-1', $user1);
         $this->addReference('user-2', $user2);
     }

     /**
      * {@inheritDoc}
      */
     public function getOrder()
     {
         return 1; // the order in which fixtures will be loaded
     }
 }