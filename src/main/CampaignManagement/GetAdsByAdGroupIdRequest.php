<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdsByAdGroupIdRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

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
     * @param ArrayOfAdType $AdTypes
     * @param AdAdditionalField $ReturnAdditionalFields
     */
    public function __construct($AdGroupId = null, $AdTypes = null, $ReturnAdditionalFields = null)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByAdGroupIdRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByAdGroupIdRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByAdGroupIdRequest
     */
    public function setReturnAdditionalFields($ReturnAdditionalFields)
    {
      $this->ReturnAdditionalFields = $ReturnAdditionalFields;
      return $this;
    }

}
