<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU6d4m9j\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU6d4m9j/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerU6d4m9j.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerU6d4m9j\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerU6d4m9j\appDevDebugProjectContainer([
    'container.build_hash' => 'U6d4m9j',
    'container.build_id' => 'd5a3931b',
    'container.build_time' => 1575579003,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerU6d4m9j');