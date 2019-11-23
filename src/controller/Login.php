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

    public function logout() {
        $this->set('user_id', null);
        $this->set('login', null);

        $this->set(App::KEY_SESSION_MAP_NAME, null);
    }
    public function auth() {
        $data = $this->getData();

        $login = $this->model->login($data['login'], $data['password']);

        if ($login['error']) {
            return $login;
        }

        return $this->generateToken($login['user_id']);
    }

    public function register() {
        $data = $this->getData();

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL) || empty($data['email'])) {
            return ['error' => 'Check your mail.'];
        }
        if(iconv_strlen($data['password']) <= 6) {
            return ['error' => 'Minimum 6 characters for password.'];
        }
        if(iconv_strlen($data['name']) <= 3) {
            return ['error' => 'Minimum 3 characters for name.'];
        }
        $user_id = $this->model->register([
            'user_login' => $data['name'],
            'user_email' => $data['email'],
            'user_password' => password_hash($data['password'], PASSWORD_BCRYPT),
            'user_route_id' => $this->model->getDefaultRouteId()
        ]);
        return $this->generateToken($user_id);
    }

    private function generateToken($user_id) {
        $routes = $this->model->getRoute($user_id);
        if($routes['error']) {
            return $routes;
        }

        $map = [];
        foreach ($routes as &$value) $map += unserialize($value['route_map']);

        $this->session->newSessionId();
        $this->set('user_id', $user_id);

        $this->set(App::KEY_SESSION_MAP_NAME, $map);

        return array(
            'message' => 'It`s okay',
            'token' => $this->session->getSessionId()
        );
    }
}