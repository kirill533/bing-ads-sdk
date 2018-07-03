<?php

namespace PMG\BingAds\CampaignManagement;

class GetConversionGoalsByIdsRequest
{

    /**
     * @var ArrayOflong $ConversionGoalIds
     */
    protected $ConversionGoalIds = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ConversionGoalType for valid values
     *
     * @var list $ConversionGoalTypes
     */
    protected $ConversionGoalTypes = null;

    /**
     * @param ArrayOflong $ConversionGoalIds
     * @param list $ConversionGoalTypes
     */
    public function __construct($ConversionGoalIds = null, $ConversionGoalTypes = null)
    {
      $this->ConversionGoalIds = $ConversionGoalIds;
      $this->ConversionGoalTypes = $ConversionGoalTypes;
    }

    /**
     * @return ArrayOflong
     */
    public function getConversionGoalIds()
    {
      return $this->ConversionGoalIds;
    }

    /**
     * @param ArrayOflong $ConversionGoalIds
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByIdsRequest
     */
    public function setConversionGoalIds($ConversionGoalIds)
    {
      $this->ConversionGoalIds = $ConversionGoalIds;
      return $this;
    }

    /**
     * @return list
     */
    public function getConversionGoalTypes()
    {
      return $this->ConversionGoalTypes;
    }

    /**
     * @param list $ConversionGoalTypes
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByIdsRequest
     */
    public function setConversionGoalTypes($ConversionGoalTypes)
    {
      $this->ConversionGoalTypes = $ConversionGoalTypes;
      return $this;
    }

}
