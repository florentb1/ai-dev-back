<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYOR1S3s\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYOR1S3s/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYOR1S3s.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYOR1S3s\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYOR1S3s\App_KernelDevDebugContainer([
    'container.build_hash' => 'YOR1S3s',
    'container.build_id' => 'da9517e3',
    'container.build_time' => 1698585494,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYOR1S3s');
