<?php declare(strict_types=1);

namespace PMG\BingAds\Fixtures;

use PMG\BingAds\PsrMessageConverter;

trait ConverterMethod
{
    public $messageConverter;

    public function setMessageConverter(PsrMessageConverter $conveter) : void
    {
        $this->messageConverter = $converter;
    }
}
