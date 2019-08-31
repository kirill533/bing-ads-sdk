<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByIdsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOflong $KeywordIds
     */
    protected $KeywordIds = null;

    /**
     * @var KeywordAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOflong $KeywordIds
     * @param KeywordAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AdGroupId = null, $KeywordIds = null, $ReturnAdditionalFields = null)
    {
    $this->AdGroupId = $AdGroupId;
    $this->KeywordIds = $KeywordIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByIdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getKeywordIds()
    {
        return $this->KeywordIds;
    }

    /**
     * @param ArrayOflong $KeywordIds
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByIdsRequest
     */
    public function setKeywordIds($KeywordIds)
    {
        $this->KeywordIds = $KeywordIds;
        return $this;
    }

    /**
     * @return KeywordAdditionalField
     */
    public function getReturnAdditionalFields()
    {
        return $this->ReturnAdditionalFields;
    }

    /**
     * @param KeywordAdditionalField $ReturnAdditionalFields
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByIdsRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
