<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container33Gsm2Q\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container33Gsm2Q/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container33Gsm2Q.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container33Gsm2Q\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container33Gsm2Q\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '33Gsm2Q',
    'container.build_id' => '7af2309f',
    'container.build_time' => 1587564536,
], __DIR__.\DIRECTORY_SEPARATOR.'Container33Gsm2Q');