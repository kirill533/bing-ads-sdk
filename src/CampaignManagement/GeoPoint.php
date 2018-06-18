<?php

namespace PMG\BingAds\CampaignMangagement;

class GeoPoint
{

    /**
     * @var int $LatitudeInMicroDegrees
     */
    protected $LatitudeInMicroDegrees = null;

    /**
     * @var int $LongitudeInMicroDegrees
     */
    protected $LongitudeInMicroDegrees = null;

    /**
     * @param int $LatitudeInMicroDegrees
     * @param int $LongitudeInMicroDegrees
     */
    public function __construct($LatitudeInMicroDegrees, $LongitudeInMicroDegrees)
    {
      $this->LatitudeInMicroDegrees = $LatitudeInMicroDegrees;
      $this->LongitudeInMicroDegrees = $LongitudeInMicroDegrees;
    }

    /**
     * @return int
     */
    public function getLatitudeInMicroDegrees()
    {
      return $this->LatitudeInMicroDegrees;
    }

    /**
     * @param int $LatitudeInMicroDegrees
     * @return \PMG\BingAds\CampaignMangagement\GeoPoint
     */
    public function setLatitudeInMicroDegrees($LatitudeInMicroDegrees)
    {
      $this->LatitudeInMicroDegrees = $LatitudeInMicroDegrees;
      return $this;
    }

    /**
     * @return int
     */
    public function getLongitudeInMicroDegrees()
    {
      return $this->LongitudeInMicroDegrees;
    }

    /**
     * @param int $LongitudeInMicroDegrees
     * @return \PMG\BingAds\CampaignMangagement\GeoPoint
     */
    public function setLongitudeInMicroDegrees($LongitudeInMicroDegrees)
    {
      $this->LongitudeInMicroDegrees = $LongitudeInMicroDegrees;
      return $this;
    }

}
