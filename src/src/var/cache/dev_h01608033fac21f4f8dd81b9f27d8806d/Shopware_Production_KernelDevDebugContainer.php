<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTu4xheQ\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTu4xheQ/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTu4xheQ.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTu4xheQ\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerTu4xheQ\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'Tu4xheQ',
    'container.build_id' => 'e0ea4e77',
    'container.build_time' => 1631877870,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTu4xheQ');
