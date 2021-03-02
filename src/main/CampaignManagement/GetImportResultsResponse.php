<?php

namespace PMG\BingAds\CampaignManagement;

class GetImportResultsResponse
{

    /**
     * @var ArrayOfImportResult $ImportResults
     */
    protected $ImportResults = null;

    /**
     * @param ArrayOfImportResult $ImportResults
     */
    public function __construct($ImportResults = null)
    {
    $this->ImportResults = $ImportResults;
    }

    /**
     * @return ArrayOfImportResult
     */
    public function getImportResults()
    {
        return $this->ImportResults;
    }

    /**
     * @param ArrayOfImportResult $ImportResults
     * @return \PMG\BingAds\CampaignManagement\GetImportResultsResponse
     */
    public function setImportResults($ImportResults)
    {
        $this->ImportResults = $ImportResults;
        return $this;
    }

}
