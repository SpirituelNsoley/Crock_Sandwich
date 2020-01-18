<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/adminSection' => [[['_route' => 'AdminSection', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/adminSection/showProfil' => [[['_route' => 'showAllProfil', '_controller' => 'App\\Controller\\AdminController::showProfil'], null, null, null, false, false, null]],
        '/adminSection/showUser' => [[['_route' => 'showAllUser', '_controller' => 'App\\Controller\\AdminController::showUser'], null, null, null, false, false, null]],
        '/adminSection/showSandwich' => [[['_route' => 'showAllSandwich', '_controller' => 'App\\Controller\\AdminController::showSandwich'], null, null, null, false, false, null]],
        '/adminSection/showIngredient' => [[['_route' => 'showAllIngredient', '_controller' => 'App\\Controller\\AdminController::showIngredient'], null, null, null, false, false, null]],
        '/adminSection/showBread' => [[['_route' => 'showAllBread', '_controller' => 'App\\Controller\\AdminController::showBread'], null, null, null, false, false, null]],
        '/adminSection/showJuice' => [[['_route' => 'showAllJuice', '_controller' => 'App\\Controller\\AdminController::showJuice'], null, null, null, false, false, null]],
        '/adminSection/showMenu' => [[['_route' => 'showAllMenu', '_controller' => 'App\\Controller\\AdminController::showMenu'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'CrockSan', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
