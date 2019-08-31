<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByEditorialStatusRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var KeywordEditorialStatus $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @var KeywordAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $AdGroupId
     * @param KeywordEditorialStatus $EditorialStatus
     * @param KeywordAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AdGroupId = null, $EditorialStatus = null, $ReturnAdditionalFields = null)
    {
    $this->AdGroupId = $AdGroupId;
    $this->EditorialStatus = $EditorialStatus;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByEditorialStatusRequest
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    /**
     * @return KeywordEditorialStatus
     */
    public function getEditorialStatus()
    {
        return $this->EditorialStatus;
    }

    /**
     * @param KeywordEditorialStatus $EditorialStatus
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByEditorialStatusRequest
     */
    public function setEditorialStatus($EditorialStatus)
    {
        $this->EditorialStatus = $EditorialStatus;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByEditorialStatusRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
        $this->ReturnAdditionalFields = $ReturnAdditionalFields;
        return $this;
    }

}
