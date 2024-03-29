<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMap.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcher.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/token'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/home'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/profile'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/list'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/blog'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/edit'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/delet'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);

return $instance;
