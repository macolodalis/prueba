<?php
/*==================================================
=========== Developer: CaesarCl0wn =================
================ Date: 9/16/18 =====================
=============== File: web.php ======================*/


return \FastRoute\simpleDispatcher( function (\FastRoute\RouteCollector $route){
    $route->addRoute('GET', '/', [\Application\Controllers\HomeController::class, 'index']);
});