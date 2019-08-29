<?php

namespace PMG\BingAds\CampaignManagement;

class AddExperimentsResponse
{

    /**
     * @var ArrayOfNullableOflong $ExperimentIds
     */
    protected $ExperimentIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $ExperimentIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($ExperimentIds = null, $PartialErrors = null)
    {
      $this->ExperimentIds = $ExperimentIds;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getExperimentIds()
    {
      return $this->ExperimentIds;
    }

    /**
     * @param ArrayOfNullableOflong $ExperimentIds
     * @return \PMG\BingAds\CampaignManagement\AddExperimentsResponse
     */
    public function setExperimentIds($ExperimentIds)
    {
      $this->ExperimentIds = $ExperimentIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddExperimentsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
