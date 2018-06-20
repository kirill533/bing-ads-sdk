<?php declare(strict_types=1);

use PMG\BingAds\BingSession;
use PMG\BingAds\BingServices;
use PMG\BingAds\CampaignManagement as cm;
use PMG\BingAds\Exception\ApiException;

require __DIR__.'/bootstrap.php';

const ACCOUNT = 'changme';
const CUSTOMER = 'changme';

$session = BingSession::builder()
    ->withEnvironment(BingSession::PROD)
    ->withOAuthClientId(getEnvOrError('BING_CLIENT_ID'))
    ->withOAuthClientSecret(getEnvOrError('BING_CLIENT_SECRET'))
    ->withOAuthRedirectUri(getenv('BING_REDIRECT_URI') ?: 'http://localhost:8080/')
    ->withRefreshToken(getEnvOrError('BING_REFRESH_TOKEN'))
    ->withDeveloperToken(getEnvOrError('BING_DEVELOPER_TOKEN'))
    ->withAccountId(ACCOUNT)
    ->withCustomerId(CUSTOMER)
    ->build()
    ;

$services = new BingServices();

$service = $services->create(cm\CampaignManagementService::class, $session, ['trace' => true]);

try {
    $response = $service->getCampaignsByIds(new cm\GetCampaignsByIdsRequest(ACCOUNT, ['284078109']));
    print_r($response);
} catch (ApiException $e) {
    echo $e->getRequest()->getBody(), PHP_EOL;
    echo $e->getResponse()->getBody(), PHP_EOL;
    print_r($e->getErrors());
}
