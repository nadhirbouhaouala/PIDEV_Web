<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM1bin3l\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM1bin3l/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerM1bin3l.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerM1bin3l\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerM1bin3l\appDevDebugProjectContainer([
    'container.build_hash' => 'M1bin3l',
    'container.build_id' => '9df2fd7d',
    'container.build_time' => 1587835715,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM1bin3l');
