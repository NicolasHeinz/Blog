<?php

namespace LoginBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LoginBundle\Entity\User;


class LoadUserData implements FixtureInterface/*,OrderedFixtureInterface*/
{
    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 497; $i <597; $i++) {
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

    /*public function getOrder()
    {
        return 1;
    }*/
}