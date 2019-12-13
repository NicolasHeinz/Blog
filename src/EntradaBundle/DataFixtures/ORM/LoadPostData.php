<?php

namespace EntradaBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EntradaBundle\Entity\Entrada;
use LoginBundle\DataFixtures\ORM\LoadUserData;
use LoginBundle\Entity\User;


class LoadPostData extends AbstractFixture implements FixtureInterface , DependentFixtureInterface
{
    /**
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        /** @var User $user1 */
        $user1 = $this->getReference(LoadUserData::USER1);

        $entradas = new Entrada();

        $entradas->setUser($user1);
        $entradas->setTitulo("Titulo");
        $entradas->setCuerpo("Cuerpo");
        $entradas->setFechaCreacion(new DateTime());
        $manager->persist($entradas);
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            LoadUserData::class
        );
    }
}