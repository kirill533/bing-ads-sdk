<?php

namespace PMG\BingAds\CampaignManagement;

class GetMediaMetaDataByIdsResponse
{

    /**
     * @var ArrayOfMediaMetaData $MediaMetaData
     */
    protected $MediaMetaData = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfMediaMetaData $MediaMetaData
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($MediaMetaData = null, $PartialErrors = null)
    {
      $this->MediaMetaData = $MediaMetaData;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfMediaMetaData
     */
    public function getMediaMetaData()
    {
      return $this->MediaMetaData;
    }

    /**
     * @param ArrayOfMediaMetaData $MediaMetaData
     * @return \PMG\BingAds\CampaignManagement\GetMediaMetaDataByIdsResponse
     */
    public function setMediaMetaData($MediaMetaData)
    {
      $this->MediaMetaData = $MediaMetaData;
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
     * @return \PMG\BingAds\CampaignManagement\GetMediaMetaDataByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
