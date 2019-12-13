<?php

namespace LoginBundle\DataFixtures\ORM;

use DateTime;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LoginBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadUserData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface
{
    const USER1 = 'user1';

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }


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
        $user1->setPassword("123");
        $user1->setCreatedDate(new DateTime());
        $user1->setActive(true);
        $user1->setRol("Usuario");
        $user1->setNotes("dsadasd");

        $serviceGenerateCode =  $this->container->get('app.generate_code');
        $user1->setUserAccountId($serviceGenerateCode->GenerateCodeAccount());

        $this->addReference(self::USER1, $user1);

        $manager->persist($user1);
        $manager->flush();
    }
}