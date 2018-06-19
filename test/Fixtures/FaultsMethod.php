<?php declare(strict_types=1);

namespace PMG\BingAds\Fixtures;

use PMG\BingAds\FaultParser;

trait FaultsMethod
{
    public $faults;

    public function setFaultParser(FaultParser $fp) : void
    {
        $this->faults = $fp;
    }
}
