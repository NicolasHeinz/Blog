<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.auth_code_manager.default' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/AuthCodeManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Model/AuthCodeManager.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Entity/AuthCodeManager.php';

return $this->services['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->load('getFosOauthServer_EntityManagerService.php')) && false ?: '_'}, 'FOS\\OAuthServerBundle\\Entity\\AuthCode');
