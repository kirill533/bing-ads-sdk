<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdsByIdsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOflong $AdIds
     */
    protected $AdIds = null;

    /**
     * @var ArrayOfAdType $AdTypes
     */
    protected $AdTypes = null;

    /**
     * @var AdAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOflong $AdIds
     * @param ArrayOfAdType $AdTypes
     * @param AdAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AdGroupId = null, $AdIds = null, $AdTypes = null, $ReturnAdditionalFields = null)
    {
    $this->AdGroupId = $AdGroupId;
    $this->AdIds = $AdIds;
    $this->AdTypes = $AdTypes;
    $this->ReturnAdditionalFields = $ReturnAdditionalFields;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByIdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdIds()
    {
        return $this->AdIds;
    }

    /**
     * @param ArrayOflong $AdIds
     * @return \PMG\BingAds\CampaignManagement\GetAdsByIdsRequest
     */
    public function setAdIds($AdIds)
    {
        $this->AdIds = $AdIds;
        return $this;
    }

    /**
     * @return ArrayOfAdType
     */
    public function getAdTypes()
    {
        return $this->AdTypes;
    }

    /**
     * @param ArrayOfAdType $AdTypes
     * @return \PMG\BingAds\CampaignManagement\GetAdsByIdsRequest
     */
    public function setAdTypes($AdTypes)
    {
        $this->AdTypes = $AdTypes;
        return $this;
    }

    /**
     * @return AdAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param AdAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetAdsByIdsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
