<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByAdGroupIdRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var KeywordAdditionalField $ReturnAdditionalFields
     */
    protected $ReturnAdditionalFields = null;

    /**
     * @param int $AdGroupId
     * @param KeywordAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AdGroupId = null, $ReturnAdditionalFields = null)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByAdGroupIdRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByAdGroupIdRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
      $this->ReturnAdditionalFields = $ReturnAdditionalFields;
      return $this;
    }

}
