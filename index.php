<?php

use core\App;

require_once __DIR__ . '/vendor/autoload.php';

$path = __DIR__ . '/src/config/db/db.ini';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$r = new App(array(
    App::KEY_PARAMS => $_REQUEST,
    App::KEY_PATH => $_REQUEST['_uri'],
    App::KEY_CONTENT => file_get_contents('php://input'),
    App::KEY_SESSION_ID => $session_id ?? 'default',
    App::KEY_EXT_CONFIG => parse_ini_file($path, true),
));
$response = $r->run();
if(!$response) {
    return $r;
} else {
    echo $response = json_encode($r->run(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}