<?php
/*==================================================
=========== Developer: CaesarCl0wn =================
================ Date: 9/16/18 =====================
============= File: container.php ==================*/

require __DIR__ . '/../vendor/autoload.php';
$containerBuilder = new \DI\ContainerBuilder;
$containerBuilder->addDefinitions(base_path('bootstrap/config.php'));
Kint::dump($containerBuilder);
try {
    $container = $containerBuilder->build();
    return $container;
} catch ( Exception $e ) {
}


