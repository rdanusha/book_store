<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/shop/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, ['GET' => 0], null, false, false, null]],
        '/shop/cart/add' => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::new'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/shop/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\ShopController::checkout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/shop/cart/([^/]++)/delete(*:33)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        33 => [
            [['_route' => 'cart_item_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
