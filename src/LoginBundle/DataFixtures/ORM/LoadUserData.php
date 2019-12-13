<?php

namespace LoginBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LoginBundle\Entity\User;


class LoadUserData extends AbstractFixture implements FixtureInterface
{
    const USER1 = 'user1';

    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName("usuario");
        $user1->setSurname("Apellido");
        $user1->setEmail("email@gmail.com");
        $user1->setUsername("UserName");
        $user1->setPassword("");
        $user1->setCreatedDate(new DateTime());
        $user1->setActive(true);
        $user1->setRol("Usuario");

        $this->addReference(self::USER1, $user1);

        $manager->persist($user1);
        $manager->flush();
    }
}