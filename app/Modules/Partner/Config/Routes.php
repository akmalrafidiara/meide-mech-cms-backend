<?php

if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Modules\Partner\Controllers', 'filter' => 'authGuard'], function ($subroutes) {

    /*** Route for Partner ***/
    $subroutes->get('partner', 'Partner::index');
});