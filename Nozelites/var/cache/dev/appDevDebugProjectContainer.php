<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBpbaqcb\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBpbaqcb/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBpbaqcb.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBpbaqcb\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBpbaqcb\appDevDebugProjectContainer([
    'container.build_hash' => 'Bpbaqcb',
    'container.build_id' => '8bfd04d1',
    'container.build_time' => 1587304920,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBpbaqcb');
