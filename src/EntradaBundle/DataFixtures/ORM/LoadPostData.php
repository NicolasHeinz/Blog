<?php

namespace EntradaBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EntradaBundle\Entity\Entrada;


class LoadPostData implements FixtureInterface/*,OrderedFixtureInterface*/
{
    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 497; $i < 597; $i++) {
            $this->createPost($manager, $i);
        }
    }

    /**
     *
     * @param ObjectManager $manager
     * @param type $n
     */
    private function createPost(ObjectManager $manager, $n)
    {
        $entradas = new Entrada();
        $entradas->setUserId($n);
        $entradas->setTitulo("Titulo".$n);
        $entradas->setCuerpo("Cuerpo".$n);
        $entradas->setFechaCreacion(new DateTime());
        $manager->persist($entradas);
        $manager->flush();
    }

    /*public function getOrder()
    {
        return 2;
    }*/
}