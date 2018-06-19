<?php declare(strict_types=1);

namespace PMG\BingAds\Exception;

use PMG\BingAds\BingException;

final class BadMethodCallException extends \BadMethodCallException implements BingException
{
    // noop
}
