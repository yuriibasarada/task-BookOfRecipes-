<?php

$a = array(
    '/recipe' => array(
        0 => 'controller\\Recipe',
        1 => 'page'
    ),
    '/recipe/create' => array(
        0 => 'controller\\Recipe',
        1 => 'create'
    ),
    '/login' => array(
        0 => 'controller\\Login',
        1 => 'login'
    ),
    '/auth' => array(
        0 => 'controller\\Login',
        1 => 'auth'
    )
);
echo serialize($a);