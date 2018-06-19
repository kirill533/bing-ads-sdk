<?php declare(strict_types=1);

namespace PMG\BingAds\Fixtures;

use PMG\BingAds\BingSession;

trait SessionMethod
{
    public $session;

    public function setSession(BingSession $s) : void
    {
        $this->session = $s;
    }
}
