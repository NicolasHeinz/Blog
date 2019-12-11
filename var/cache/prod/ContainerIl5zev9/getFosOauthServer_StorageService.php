<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.storage' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2Storage.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2RefreshTokens.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantUser.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantCode.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantImplicit.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantClient.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantExtension.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Storage/GrantExtensionDispatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Storage/OAuthStorage.php';

return $this->services['fos_oauth_server.storage'] = new \FOS\OAuthServerBundle\Storage\OAuthStorage(${($_ = isset($this->services['fos_oauth_server.client_manager.default']) ? $this->services['fos_oauth_server.client_manager.default'] : $this->load('getFosOauthServer_ClientManager_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.access_token_manager.default']) ? $this->services['fos_oauth_server.access_token_manager.default'] : $this->load('getFosOauthServer_AccessTokenManager_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.refresh_token_manager.default']) ? $this->services['fos_oauth_server.refresh_token_manager.default'] : $this->load('getFosOauthServer_RefreshTokenManager_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.auth_code_manager.default']) ? $this->services['fos_oauth_server.auth_code_manager.default'] : $this->load('getFosOauthServer_AuthCodeManager_DefaultService.php')) && false ?: '_'}, NULL, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load('getSecurity_EncoderFactoryService.php')) && false ?: '_'});
