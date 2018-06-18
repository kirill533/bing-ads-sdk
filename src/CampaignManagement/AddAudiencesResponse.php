<?php

namespace PMG\BingAds\CampaignMangagement;

class AddAudiencesResponse
{

    /**
     * @var ArrayOfNullableOflong $AudienceIds
     */
    protected $AudienceIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $AudienceIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($AudienceIds, $PartialErrors)
    {
      $this->AudienceIds = $AudienceIds;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getAudienceIds()
    {
      return $this->AudienceIds;
    }

    /**
     * @param ArrayOfNullableOflong $AudienceIds
     * @return \PMG\BingAds\CampaignMangagement\AddAudiencesResponse
     */
    public function setAudienceIds($AudienceIds)
    {
      $this->AudienceIds = $AudienceIds;
      return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignMangagement\AddAudiencesResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
