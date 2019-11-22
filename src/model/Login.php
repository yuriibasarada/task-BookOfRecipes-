<?php


namespace model;


use core\Model;

class Login extends Model
{
    const NAME = 'login';

    public function login(string $login, string $password): array
    {
        $query = "SELECT * FROM user WHERE 
                  user_login = :user_login";
        $user = $this->query($query, array(
            'user_login' => $login,
        ))->fetchAssoc();
        if (!$user) {
            return array(
                'error' => "User with this login does not exists.s"
            );
        }
        if (!password_verify($password, $user['user_password'])) {
            return array(
                'error' => 'You entered the wrong password'
            );
        }

        return $user;
    }

    public function getRoute($uid) {
        $query = "SELECT * FROM route r 
                 INNER JOIN user u on r.route_id = u.user_route_id
                 WHERE user_id = :user_id";
        $routes = $this->query($query, array(
            'user_id' => $uid
        ))->fetchAssocAll();

        if(!$routes) {
            return array(
                'error' => 'Not found routes for this user.'
            );
        }
        return $routes;
    }

}