<?php declare(strict_types=1);

use PMG\BingAds\BingSession;
use PMG\BingAds\BingServices;
use PMG\BingAds\CustomerManagement as cm;

require __DIR__.'/bootstrap.php';

$session = BingSession::builder()
    ->withEnvironment(BingSession::PROD)
    ->withOAuthClientId(getEnvOrError('BING_CLIENT_ID'))
    ->withOAuthClientSecret(getEnvOrError('BING_CLIENT_SECRET'))
    ->withOAuthRedirectUri(getenv('BING_REDIRECT_URI') ?: 'http://localhost:8080/')
    ->withRefreshToken(getEnvOrError('BING_REFRESH_TOKEN'))
    ->withDeveloperToken(getEnvOrError('BING_DEVELOPER_TOKEN'))
    ->build()
    ;

$services = new BingServices();
$service = $services->create(cm\CustomerManagementService::class, $session, ['trace' => true]);

try {
    $response = $service->getCustomersInfo(new cm\GetCustomersInfoRequest('a', 10));
    print_r($response);
} catch (cm\ApiFault $e) {
    echo $e->getRequest()->getBody(), PHP_EOL;
    echo $e->getResponse()->getBody(), PHP_EOL;
    print_r($e->getOperationErrors());
}
