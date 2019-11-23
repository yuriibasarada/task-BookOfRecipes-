<?php

use core\App;

require_once __DIR__ . '/vendor/autoload.php';

$path = __DIR__ . '/src/config/db/db.ini';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
if(isset($_REQUEST['token'])) {
    $token = $_REQUEST['token'];
}
$r = new App(array(
    App::KEY_PARAMS => $_REQUEST,
    App::KEY_PATH => $_REQUEST['_uri'],
    App::KEY_CONTENT => file_get_contents('php://input'),
    App::KEY_SESSION_ID => $token ?? 'default',
    App::KEY_EXT_CONFIG => parse_ini_file($path, true),
));

$response = json_encode($r->run(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ;
if($response === 'null') {
} else {
    echo $response;
}
