<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/shop/cart']], [], []],
    'add_to_cart' => [[], ['_controller' => 'App\\Controller\\CartController::new'], [], [['text', '/shop/cart/add']], [], []],
    'cart_item_delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/shop/cart']], [], []],
    'shop' => [[], ['_controller' => 'App\\Controller\\ShopController::index'], [], [['text', '/']], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\ShopController::checkout'], [], [['text', '/shop/checkout']], [], []],
    'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/dashboard/']], [], []],
];
