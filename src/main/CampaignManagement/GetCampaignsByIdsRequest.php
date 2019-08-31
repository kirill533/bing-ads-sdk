<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignsByIdsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOflong $CampaignIds
     */
    protected $CampaignIds = null;

    /**
     * @var CampaignType $CampaignType
     */
    protected $CampaignType = null;

    /**
     * @var CampaignAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $CampaignIds
     * @param CampaignType $CampaignType
     * @param CampaignAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AccountId = null, $CampaignIds = null, $CampaignType = null, $ReturnAdditionalFields = null)
    {
    $this->AccountId = $AccountId;
    $this->CampaignIds = $CampaignIds;
    $this->CampaignType = $CampaignType;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * @param ArrayOflong $CampaignIds
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest
     */
    public function setCampaignIds($CampaignIds)
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    /**
     * @return CampaignType
     */
    public function getCampaignType()
    {
        return $this->CampaignType;
    }

    /**
     * @param CampaignType $CampaignType
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest
     */
    public function setCampaignType($CampaignType)
    {
        $this->CampaignType = $CampaignType;
        return $this;
    }

    /**
     * @return CampaignAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param CampaignAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
