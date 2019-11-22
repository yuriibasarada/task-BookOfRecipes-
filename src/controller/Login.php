<?php


namespace controller;


use core\App;
use core\Controller;

class Login extends Controller
{
    const NAME = 'login';

    public function login() {
        return $this->view->render('Login');
    }

    public function auth() {
        $data = $this->getData();

        $login = $this->model->login($data['login'], $data['password']);

        if ($login['error']) {
            return $login;
        }

        $routes = $this->model->getRoute($login['user_id']);
        if($routes['error']) {
            return $routes;
        }

        $map = [];
        foreach ($routes as &$value) $map += unserialize($value['route_map']);

        $this->session->newSessionId();
        $this->set('user_id', $login['user_id']);
        $this->set('login', $login['login']);

        $this->set(App::KEY_SESSION_MAP_NAME, $map);

        return array(
            'message' => 'It`s okay'
        );
    }

}