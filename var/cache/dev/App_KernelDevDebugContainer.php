<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBE6XFBz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBE6XFBz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBE6XFBz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBE6XFBz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBE6XFBz\App_KernelDevDebugContainer([
    'container.build_hash' => 'BE6XFBz',
    'container.build_id' => '08ee72f6',
    'container.build_time' => 1609323254,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBE6XFBz');
