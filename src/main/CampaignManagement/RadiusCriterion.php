<?php

namespace PMG\BingAds\CampaignManagement;

class RadiusCriterion extends Criterion
{

    /**
     * @var float $LatitudeDegrees
     */
    protected $LatitudeDegrees = null;

    /**
     * @var float $LongitudeDegrees
     */
    protected $LongitudeDegrees = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Radius
     */
    protected $Radius = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\DistanceUnit for valid values
     *
     * @var string $RadiusUnit
     */
    protected $RadiusUnit = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getLatitudeDegrees()
    {
      return $this->LatitudeDegrees;
    }

    /**
     * @param float $LatitudeDegrees
     * @return \PMG\BingAds\CampaignManagement\RadiusCriterion
     */
    public function setLatitudeDegrees($LatitudeDegrees)
    {
      $this->LatitudeDegrees = $LatitudeDegrees;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitudeDegrees()
    {
      return $this->LongitudeDegrees;
    }

    /**
     * @param float $LongitudeDegrees
     * @return \PMG\BingAds\CampaignManagement\RadiusCriterion
     */
    public function setLongitudeDegrees($LongitudeDegrees)
    {
      $this->LongitudeDegrees = $LongitudeDegrees;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\RadiusCriterion
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
      return $this->Radius;
    }

    /**
     * @param int $Radius
     * @return \PMG\BingAds\CampaignManagement\RadiusCriterion
     */
    public function setRadius($Radius)
    {
      $this->Radius = $Radius;
      return $this;
    }

    /**
     * @return string
     */
    public function getRadiusUnit()
    {
      return $this->RadiusUnit;
    }

    /**
     * @param string $RadiusUnit
     * @return \PMG\BingAds\CampaignManagement\RadiusCriterion
     */
    public function setRadiusUnit($RadiusUnit)
    {
      $this->RadiusUnit = $RadiusUnit;
      return $this;
    }

}
