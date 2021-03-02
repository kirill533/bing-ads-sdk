<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteImportJobsRequest
{

    /**
     * @var ArrayOflong $ImportJobIds
     */
    protected $ImportJobIds = null;

    /**
     * @var string $ImportType
     */
    protected $ImportType = null;

    /**
     * @param ArrayOflong $ImportJobIds
     * @param string $ImportType
     */
    public function __construct($ImportJobIds = null, $ImportType = null)
    {
    $this->ImportJobIds = $ImportJobIds;
    $this->ImportType = $ImportType;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteImportJobsRequest
     */
    public function setImportJobIds($ImportJobIds)
    {
        $this->ImportJobIds = $ImportJobIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getImportType()
    {
        return $this->ImportType;
    }

    /**
     * @param string $ImportType
     * @return \PMG\BingAds\CampaignManagement\DeleteImportJobsRequest
     */
    public function setImportType($ImportType)
    {
        $this->ImportType = $ImportType;
        return $this;
    }

}
