<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUecxxpu\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUecxxpu/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUecxxpu.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUecxxpu\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUecxxpu\appProdProjectContainer([
    'container.build_hash' => 'Uecxxpu',
    'container.build_id' => '1343d5a5',
    'container.build_time' => 1652197073,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUecxxpu');
