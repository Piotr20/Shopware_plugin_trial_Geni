<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXla8dUc\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXla8dUc/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXla8dUc.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXla8dUc\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerXla8dUc\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'Xla8dUc',
    'container.build_id' => '3430c936',
    'container.build_time' => 1631880683,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXla8dUc');