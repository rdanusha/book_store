<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWucpji9\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWucpji9/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWucpji9.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWucpji9\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWucpji9\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Wucpji9',
    'container.build_id' => 'c9179c4f',
    'container.build_time' => 1594480056,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWucpji9');