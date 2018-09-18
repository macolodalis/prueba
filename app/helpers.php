<?php
/*==================================================
=========== Developer: CaesarCl0wn =================
================ Date: 9/16/18 =====================
============= File: Helpers.php ====================*/

if ( ! function_exists('base_path')) {
    function base_path(string $path): string {
        return __DIR__ . '/..//' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}


