<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.latest_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsLatestDoctrineCommand.php';

$this->services['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

$instance->setName('doctrine:migrations:latest');

return $instance;
