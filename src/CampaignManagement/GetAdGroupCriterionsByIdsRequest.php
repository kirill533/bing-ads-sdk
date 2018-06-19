<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdGroupCriterionsByIdsRequest
{

    /**
     * @var ArrayOflong $AdGroupCriterionIds
     */
    protected $AdGroupCriterionIds = null;

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var AdGroupCriterionType $CriterionType
     */
    protected $CriterionType = null;

    /**
     * @param ArrayOflong $AdGroupCriterionIds
     * @param int $AdGroupId
     * @param AdGroupCriterionType $CriterionType
     */
    public function __construct($AdGroupCriterionIds, $AdGroupId, $CriterionType)
    {
      $this->AdGroupCriterionIds = $AdGroupCriterionIds;
      $this->AdGroupId = $AdGroupId;
      $this->CriterionType = $CriterionType;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdGroupCriterionIds()
    {
      return $this->AdGroupCriterionIds;
    }

    /**
     * @param ArrayOflong $AdGroupCriterionIds
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupCriterionsByIdsRequest
     */
    public function setAdGroupCriterionIds($AdGroupCriterionIds)
    {
      $this->AdGroupCriterionIds = $AdGroupCriterionIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupCriterionsByIdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return AdGroupCriterionType
     */
    public function getCriterionType()
    {
      return $this->CriterionType;
    }

    /**
     * @param AdGroupCriterionType $CriterionType
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupCriterionsByIdsRequest
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
