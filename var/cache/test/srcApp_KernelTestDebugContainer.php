<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEjwplom\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEjwplom/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerEjwplom.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerEjwplom\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \ContainerEjwplom\srcApp_KernelTestDebugContainer([
    'container.build_hash' => 'Ejwplom',
    'container.build_id' => '672926cd',
    'container.build_time' => 1594478648,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEjwplom');
