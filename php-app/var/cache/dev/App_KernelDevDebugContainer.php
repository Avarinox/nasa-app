<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerABlvbZB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerABlvbZB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerABlvbZB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerABlvbZB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerABlvbZB\App_KernelDevDebugContainer([
    'container.build_hash' => 'ABlvbZB',
    'container.build_id' => 'd3390baa',
    'container.build_time' => 1728124060,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerABlvbZB');
