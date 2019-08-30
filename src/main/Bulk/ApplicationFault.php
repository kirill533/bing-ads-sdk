<?php

namespace PMG\BingAds\Bulk;

class ApplicationFault extends \PMG\BingAds\Exception\ApiException
{

    /**
     * @var string $TrackingId
     */
    protected $TrackingId = null;

    /**
     * @return string
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }

    /**
     * @param string $TrackingId
     * @return \PMG\BingAds\Bulk\ApplicationFault
     */
    public function setTrackingId($TrackingId)
    {
        $this->TrackingId = $TrackingId;
        return $this;
    }

}
