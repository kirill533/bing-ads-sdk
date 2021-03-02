<?php

namespace PMG\BingAds\CampaignManagement;

class GetImportJobsByIdsResponse
{

    /**
     * @var ArrayOfImportJob $ImportJobs
     */
    protected $ImportJobs = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfImportJob $ImportJobs
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($ImportJobs = null, $PartialErrors = null)
    {
    $this->ImportJobs = $ImportJobs;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfImportJob
     */
    public function getImportJobs()
    {
        return $this->ImportJobs;
    }

    /**
     * @param ArrayOfImportJob $ImportJobs
     * @return \PMG\BingAds\CampaignManagement\GetImportJobsByIdsResponse
     */
    public function setImportJobs($ImportJobs)
    {
        $this->ImportJobs = $ImportJobs;
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
     * @return \PMG\BingAds\CampaignManagement\GetImportJobsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
