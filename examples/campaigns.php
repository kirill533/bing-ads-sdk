<?php declare(strict_types=1);

use PMG\BingAds\BingSession;
use PMG\BingAds\BingServices;
use PMG\BingAds\CampaignManagement as cm;

require __DIR__.'/bootstrap.php';

$session = BingSession::builder()
    ->withOAuthClientId(getenv('BING_CLIENT_ID'))
    ->withOAuthClientSecret(getenv('BING_CLIENT_SECRET'))
    ->withOAuthRedirectUri(getenv('BING_REDIRECT_URI') ?: 'http://localhost:8080/')
    ->withRefreshToken(getenv('BING_REFRESH_TOKEN'))
    ->withDeveloperToken(getenv('BING_DEVELOPER_TOKEN'))
    ->build()
    ;

$services = new BingServices();

$service = $services->create(cm\CampaignManagementService::class, $session, ['trace' => true]);

$service->getCampaignsByIds(new cm\GetCampaignsByIdsRequest());
