<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'kilik_table_api' shared service.

include_once $this->targetDirs[3].'/vendor/kilik/table/Services/TableServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/kilik/table/Services/AbstractTableService.php';
include_once $this->targetDirs[3].'/vendor/kilik/table/Services/TableApiService.php';

return $this->services['kilik_table_api'] = new \Kilik\TableBundle\Services\TableApiService(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
