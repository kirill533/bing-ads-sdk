<?php

namespace PMG\BingAds\CampaignManagement;

class AddImportJobsResponse
{

    /**
     * @var ArrayOflong $ImportJobIds
     */
    protected $ImportJobIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOflong $ImportJobIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($ImportJobIds = null, $PartialErrors = null)
    {
    $this->ImportJobIds = $ImportJobIds;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOflong
     */
    public function getImportJobIds()
    {
        return $this->ImportJobIds;
    }

    /**
     * @param ArrayOflong $ImportJobIds
     * @return \PMG\BingAds\CampaignManagement\AddImportJobsResponse
     */
    public function setImportJobIds($ImportJobIds)
    {
        $this->ImportJobIds = $ImportJobIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddImportJobsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
