<?php

namespace core;

use shApp\app\AppAbstract;

class App extends  AppAbstract
{
    const MAP_DEFAULT = array(
        '/login' => array(
            0 => 'controller\\Login',
            1 => 'login'
        ),
        '/auth' => array(
            0 => 'controller\\Login',
            1 => 'auth'
        ),
        '/register' => array(
            0 => 'controller\\Login',
            1 => 'register'
        ),
        '/logout' => array(
            0 => 'controller\\Login',
            1 => 'logout'
        )
    );
}