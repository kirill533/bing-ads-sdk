<?php declare(strict_types=1);

namespace PMG\BingAds\Exception;

use PMG\BingAds\BingException;

final class LogicException extends \LogicException implements BingException
{
    // noop
}
