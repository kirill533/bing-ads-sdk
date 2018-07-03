<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteCampaignCriterionsRequest
{

    /**
     * @var ArrayOflong $CampaignCriterionIds
     */
    protected $CampaignCriterionIds = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\CampaignCriterionType for valid values
     *
     * @var list $CriterionType
     */
    protected $CriterionType = null;

    /**
     * @param ArrayOflong $CampaignCriterionIds
     * @param int $CampaignId
     * @param list $CriterionType
     */
    public function __construct($CampaignCriterionIds = null, $CampaignId = null, $CriterionType = null)
    {
      $this->CampaignCriterionIds = $CampaignCriterionIds;
      $this->CampaignId = $CampaignId;
      $this->CriterionType = $CriterionType;
    }

    /**
     * @return ArrayOflong
     */
    public function getCampaignCriterionIds()
    {
      return $this->CampaignCriterionIds;
    }

    /**
     * @param ArrayOflong $CampaignCriterionIds
     * @return \PMG\BingAds\CampaignManagement\DeleteCampaignCriterionsRequest
     */
    public function setCampaignCriterionIds($CampaignCriterionIds)
    {
      $this->CampaignCriterionIds = $CampaignCriterionIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\CampaignManagement\DeleteCampaignCriterionsRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return list
     */
    public function getCriterionType()
    {
      return $this->CriterionType;
    }

    /**
     * @param list $CriterionType
     * @return \PMG\BingAds\CampaignManagement\DeleteCampaignCriterionsRequest
     */
    public function setCriterionType($CriterionType)
    {
      $this->CriterionType = $CriterionType;
      return $this;
    }

}
