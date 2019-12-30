<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
