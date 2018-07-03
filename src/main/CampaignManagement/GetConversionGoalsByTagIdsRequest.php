<?php

namespace PMG\BingAds\CampaignManagement;

class GetConversionGoalsByTagIdsRequest
{

    /**
     * @var ArrayOflong $TagIds
     */
    protected $TagIds = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ConversionGoalType for valid values
     *
     * @var list $ConversionGoalTypes
     */
    protected $ConversionGoalTypes = null;

    /**
     * @param ArrayOflong $TagIds
     * @param list $ConversionGoalTypes
     */
    public function __construct($TagIds = null, $ConversionGoalTypes = null)
    {
      $this->TagIds = $TagIds;
      $this->ConversionGoalTypes = $ConversionGoalTypes;
    }

    /**
     * @return ArrayOflong
     */
    public function getTagIds()
    {
      return $this->TagIds;
    }

    /**
     * @param ArrayOflong $TagIds
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByTagIdsRequest
     */
    public function setTagIds($TagIds)
    {
      $this->TagIds = $TagIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetConversionGoalsByTagIdsRequest
     */
    public function setConversionGoalTypes($ConversionGoalTypes)
    {
      $this->ConversionGoalTypes = $ConversionGoalTypes;
      return $this;
    }

}
