<?php

namespace PMG\BingAds\CampaignManagement;

class AddImportJobsRequest
{

    /**
     * @var ArrayOfImportJob $ImportJobs
     */
    protected $ImportJobs = null;

    /**
     * @param ArrayOfImportJob $ImportJobs
     */
    public function __construct($ImportJobs = null)
    {
    $this->ImportJobs = $ImportJobs;
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
     * @return \PMG\BingAds\CampaignManagement\AddImportJobsRequest
     */
    public function setImportJobs($ImportJobs)
    {
        $this->ImportJobs = $ImportJobs;
        return $this;
    }

}
