<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXg3unma\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXg3unma/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXg3unma.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXg3unma\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXg3unma\appDevDebugProjectContainer([
    'container.build_hash' => 'Xg3unma',
    'container.build_id' => '47764925',
    'container.build_time' => 1587907553,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXg3unma');
