<?php

namespace PMG\BingAds\CampaignManagement;

class ApplicationFault
{

    /**
     * @var string $TrackingId
     */
    protected $TrackingId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getTrackingId()
    {
      return $this->TrackingId;
    }

    /**
     * @param string $TrackingId
     * @return \PMG\BingAds\CampaignManagement\ApplicationFault
     */
    public function setTrackingId($TrackingId)
    {
      $this->TrackingId = $TrackingId;
      return $this;
    }

}
