<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdGroupsByIdsRequest
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var ArrayOflong $AdGroupIds
     */
    protected $AdGroupIds = null;

    /**
     * @var AdGroupAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $CampaignId
     * @param ArrayOflong $AdGroupIds
     * @param AdGroupAdditionalField $ReturnAdditionalFields
     */
    public function __construct($CampaignId = null, $AdGroupIds = null, $ReturnAdditionalFields = null)
    {
    $this->CampaignId = $CampaignId;
    $this->AdGroupIds = $AdGroupIds;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupsByIdsRequest
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdGroupIds()
    {
        return $this->AdGroupIds;
    }

    /**
     * @param ArrayOflong $AdGroupIds
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupsByIdsRequest
     */
    public function setAdGroupIds($AdGroupIds)
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    /**
     * @return AdGroupAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param AdGroupAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupsByIdsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
