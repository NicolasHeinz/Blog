<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.security.entry_point' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Security/EntryPoint/OAuthEntryPoint.php';

return $this->services['fos_oauth_server.security.entry_point'] = new \FOS\OAuthServerBundle\Security\EntryPoint\OAuthEntryPoint(${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->load('getFosOauthServer_ServerService.php')) && false ?: '_'});
