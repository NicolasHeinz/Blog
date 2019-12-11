<?php

namespace LoginBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LoginBundle\Entity\User;


class LoadUserData implements FixtureInterface
{
    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 100; $i++) {
            $this->createUser($manager, $i);
        }
    }

    /**
     *
     * @param ObjectManager $manager
     * @param type $n
     */
    private function createUser(ObjectManager $manager, $n)
    {
        $usuarios = new User();
        $usuarios->setName("usuario".$n);
        $usuarios->setSurname("Apellido".$n);
        $usuarios->setEmail("email".$n."@gmail.com");
        $usuarios->setUsername("UserName".$n);
        $usuarios->setPassword($n);
        $usuarios->setCreatedDate(new DateTime());
        $usuarios->setActive(true);
        $usuarios->setRol("Usuario");

        $manager->persist($usuarios);
        $manager->flush();
    }
}