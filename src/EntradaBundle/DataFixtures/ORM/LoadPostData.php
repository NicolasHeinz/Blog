<?php

namespace EntradaBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EntradaBundle\Entity\Entrada;


class LoadPostData implements FixtureInterface
{
    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 100; $i++) {
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
        $entradas->setAutor($n);
        $entradas->setTitulo("Titulo".$n);
        $entradas->setCuerpo("Cuerpo".$n);
        $entradas->setFechaCreacion(new DateTime());
        $manager->persist($entradas);
        $manager->flush();
    }
}