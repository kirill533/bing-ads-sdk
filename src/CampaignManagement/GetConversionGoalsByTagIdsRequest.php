<?php

namespace PMG\BingAds\CampaignMangagement;

class GetConversionGoalsByTagIdsRequest
{

    /**
     * @var ArrayOflong $TagIds
     */
    protected $TagIds = null;

    /**
     * @var ConversionGoalType $ConversionGoalTypes
     */
    protected $ConversionGoalTypes = null;

    /**
     * @param ArrayOflong $TagIds
     * @param ConversionGoalType $ConversionGoalTypes
     */
    public function __construct($TagIds, $ConversionGoalTypes)
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
     * @return \PMG\BingAds\CampaignMangagement\GetConversionGoalsByTagIdsRequest
     */
    public function setTagIds($TagIds)
    {
      $this->TagIds = $TagIds;
      return $this;
    }

    /**
     * @return ConversionGoalType
     */
    public function getConversionGoalTypes()
    {
      return $this->ConversionGoalTypes;
    }

    /**
     * @param ConversionGoalType $ConversionGoalTypes
     * @return \PMG\BingAds\CampaignMangagement\GetConversionGoalsByTagIdsRequest
     */
    public function setConversionGoalTypes($ConversionGoalTypes)
    {
      $this->ConversionGoalTypes = $ConversionGoalTypes;
      return $this;
    }

}
