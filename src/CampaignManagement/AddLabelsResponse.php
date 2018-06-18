<?php

namespace PMG\BingAds\CampaignMangagement;

class AddLabelsResponse
{

    /**
     * @var ArrayOfNullableOflong $LabelIds
     */
    protected $LabelIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $LabelIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($LabelIds, $PartialErrors)
    {
      $this->LabelIds = $LabelIds;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getLabelIds()
    {
      return $this->LabelIds;
    }

    /**
     * @param ArrayOfNullableOflong $LabelIds
     * @return \PMG\BingAds\CampaignMangagement\AddLabelsResponse
     */
    public function setLabelIds($LabelIds)
    {
      $this->LabelIds = $LabelIds;
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
     * @return \PMG\BingAds\CampaignMangagement\AddLabelsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
