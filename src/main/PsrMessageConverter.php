<?php declare(strict_types=1);

namespace PMG\BingAds;

use GuzzleHttp\Psr7\Message;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * The `SoapClient` can trace its own requests and just sends them
 * back in string format. This turns those values in psr/http-message
 * objects for use in exceptions.
 *
 * The only thing that's a bit wonky here is that the requests will always
 * come back with a `http` URI.
 */
class PsrMessageConverter
{
    const REDACTED = '{REDACTED}';
    const HEADER_REGEX_FORMAT = '#(<(?:[^:]+:)?%1$s(?:\s[^>]*)?>).*(</(?:[^:]+:)?%1$s>)#sU';

    public function createRequest(?string $headers, ?string $body, string $scheme) : ?RequestInterface
    {
        if (!$headers || !$body) {
            return null;
        }

        try {
            $req = Message::parseRequest(trim($headers)."\r\n\r\n".$this->scrubRequestHeaders(trim($body)));
        } catch (\InvalidArgumentException $_) {
            return null;
        }

        return $req->withUri($req->getUri()->withScheme($scheme));
    }

    public function createResponse(?string $headers, ?string $body) : ?ResponseInterface
    {
        if (!$headers || !$body) {
            return null;
        }

        try {
            return Message::parseResponse(trim($headers)."\r\n\r\n".trim($body));
        } catch (\InvalidArgumentException $_) {
            return null;
        }
    }

    private function scrubRequestHeaders(string $body)
    {
        foreach (['AuthenticationToken', 'DeveloperToken'] as $tag) {
            $body = preg_replace(
                sprintf(self::HEADER_REGEX_FORMAT, $tag),
                sprintf('\\1%s\\2', self::REDACTED),
                $body
            );
        }

        return $body;
    }
}
