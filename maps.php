<?php

$a = array(
    '/ingredient' => array(
        0 => 'controller\\Ingredient',
        1 => 'page'
    ),
    '/ingredient/create' => array(
        0 => 'controller\\Ingredient',
        1 => 'create'
    ),
    '/ingredient/add' => array(
        0 => 'controller\\Ingredient',
        1 => 'add'
    ),
    '/ingredient/delete/:var' => array(
        0 => 'controller\\Ingredient',
        1 => 'delete'
    ),
    '/ingredient/edit/:var' => array(
        0 => 'controller\\Ingredient',
        1 => 'edit'
    ),
    '/ingredient/update/:var' => array(
        0 => 'controller\\Ingredient',
        1 => 'update'
    ),
    '/recipe' => array(
        0 => 'controller\\Recipe',
        1 => 'page'
    ),
    '/recipe/create' => array(
        0 => 'controller\\Recipe',
        1 => 'create'
    ),
    '/recipe/add' => array(
        0 => 'controller\\Recipe',
        1 => 'add'
    ),
    '/recipe/read/:var' => array(
        0 => 'controller\\Recipe',
        1 => 'read'
    ),
    '/recipe/delete/:var' => array(
        0 => 'controller\\Recipe',
        1 => 'delete'
    ),
    '/recipe/edit/:var' => array(
        0 => 'controller\\Recipe',
        1 => 'edit'
    ),
    '/recipe/update/:var' => array(
        0 => 'controller\\Recipe',
        1 => 'update'
    ),
    '/login' => array(
        0 => 'controller\\Login',
        1 => 'login'
    ),
    '/auth' => array(
        0 => 'controller\\Login',
        1 => 'auth'
    ),
    '/logout' => array(
        0 => 'controller\\Login',
        1 => 'logout'
    )
);
echo serialize($a);
