<?php

use PMG\BingAds\Auth\MicrosoftProvider;

require __DIR__.'/../bootstrap.php';

const STATEKEY = 'oauth2state';
session_start();

$provider = MicrosoftProvider::production([
    'clientId' => getenv('BING_CLIENT_ID'),
    'clientSecret' => getenv('BING_CLIENT_SECRET'),
    'redirectUri' => 'http://localhost:'.$_SERVER['SERVER_PORT'].'/',
]);

if (!isset($_GET['code'])) {
    $redir = $provider->getAuthorizationUrl(['prompt' => 'login']);
    $_SESSION[STATEKEY] = $provider->getState();
    header('Location: '.$redir, true, 303);
    die;
} elseif (empty($_GET['state']) || empty($_SESSION[STATEKEY]) || !hash_equals($_SESSION[STATEKEY], $_GET['state'])) {
    unset($_SESSION[STATEKEY]);
    header('HTTP/1.1 400 Bad Request', true, 400);
    die('<h1>Bad State</h1>');
} else {
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code'],
    ]);

    header('HTTP/1.1 200 OK', true, 200);

    echo '<pre>';
    print_r($token);
    echo '</pre>';
}
