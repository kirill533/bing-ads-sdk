# Bing Ads SDK for PHP

This is an alternative to the [official Bing Ads PHP SDK](https://github.com/BingAds/BingAds-PHP-SDK).

It's heavily inspired by [Google AdWords PHP SDK](https://github.com/googleads/googleads-php-lib)
and has some things the official Bing SDK is missing:

1. No `SoapVar` required
1. Automatic access token refreshes

It leverages [`league/oauth2-client`](http://oauth2-client.thephpleague.com/) to
deal with the oauth flow.

## Core Concepts

- A *session* objects acts as a contain for all pre-request configuration (oauth
  creds, developer token, api environment, etc).
- A *service* is instantiated with a session and extends `SoapClient`. Services
  are used to make the actual requests to the API.

## Usage Example

```php
use PMG\BingAds\BingSession;
use PMG\BingAds\BingServices;
use PMG\BingAds\CustomerManagement as cm;

$session = BingSession::builder()
    ->withEnvironment(BingSession::PROD) // or use BingSession::SANDBOX
    ->withOAuthClientId('changeme')
    ->withOAuthClientSecret('changeme')
    ->withOAuthRedirectUri('https://yourapp.com/oauth/microsoft')
    ->withRefreshToken('someRefreshToken')
    ->withDeveloperToken('someDeveloperToken')
    ->build()
    ;

$services = new BingServices();

$service = $services->create(cm\CustomerManagementService::class, $session);

$response = $service->getCustomersInfo(new cm\GetCustomersInfoRequest('a', 10));
print_r($response);
```

## Error Handling

If a soap fault occurs, it will be wrapped up in `PMG\BingAds\Exception\ApiException`.
This exception *may* be specific to a service or it may be the generic
`PMG\BingAds\Exception\SoapFault`.

To see the actual HTTP requests and response, set `trace` to true in the soap
client options.

```php
use PMG\BingAds\BingSession;
use PMG\BingAds\BingServices;
use PMG\BingAds\CustomerManagement as cm;

$session = BingSession::builder()
    /* build a session as above */
    ->build()
    ;

$services = new BingServices();

$service = $services->create(cm\CustomerManagementService::class, $session, [
    'trace' => true,
]);

try {
    $response = $service->getCustomersInfo(new cm\GetCustomersInfoRequest('a', 10));
} catch (cm\ApplicationFault $fault) {
    echo $fault->getTrackingId(), PHP_EOL; // a UUID to help the bing team debug

    /** @var Psr\Http\Message\RequestInterface $request */
    $request = $fault->getRequest();
    if ($request) {
        // request will be there if `trace => true` otherwise this will be null
        // show the SOAP XML request. The credentials here (access token,
        // developer token) will be redacted
        echo $request->getBody(), PHP_EOL;
    }

    /** @var Psr\Http\Message\ResponseInterface $response */
    $response = $fault->getResponse();
    if ($response) {
        // respone will be there if `trace => true` otherwise it's null
        // display the SOAP XML response
        echo $response->getBody(), PHP_EOL;
    }

    // show actual errors
    if ($fault instanceof cm\ApiFault) {
        print_r($fault->getOperationErrors());
    } elseif ($fault instanceof cm\AdApiFault) {
        print_r($fault->getErrors());
    }
}
```

## Authentication

See [examples/auth](examples/auth) for an example.

Instantiate a `PMG\BingAds\Auth\MicrosoftProvider` and use it like any other
[`oauth2-client` provider](http://oauth2-client.thephpleague.com/usage/).

```php
use PMG\BingAds\Auth\MicrosoftProvider;

$provider = MicrosoftProvider::production([
    'clientId' => 'changeme',
    'clientSecret' => 'changeme',
    'redirectUri' => 'https://youramp.com/oauth/microsft',
]);

// get an authorization URL
$authurl = $provider->getAuthorizationUrl(['prompt' => 'login']);
// may want to $pvodier->getState() to save the state some place

// exchange a `code` for an access token
$token = $provider->getAccessToken('authorization_code', [
    'code' => $_GET['code'],
]);
```
