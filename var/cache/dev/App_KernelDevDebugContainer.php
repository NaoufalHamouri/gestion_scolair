<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCFotXKa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCFotXKa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCFotXKa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCFotXKa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCFotXKa\App_KernelDevDebugContainer([
    'container.build_hash' => 'CFotXKa',
    'container.build_id' => '413db0ec',
    'container.build_time' => 1716667229,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCFotXKa');
