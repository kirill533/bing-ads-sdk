<?php

namespace PMG\BingAds\CampaignManagement;

class GetExperimentsByIdsRequest
{

    /**
     * @var ArrayOflong $ExperimentIds
     */
    protected $ExperimentIds = null;

    /**
     * @var Paging $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param ArrayOflong $ExperimentIds
     * @param Paging $PageInfo
     */
    public function __construct($ExperimentIds = null, $PageInfo = null)
    {
    $this->ExperimentIds = $ExperimentIds;
    $this->PageInfo = $PageInfo;
    }

    /**
     * @return ArrayOflong
     */
    public function getExperimentIds()
    {
        return $this->ExperimentIds;
    }

    /**
     * @param ArrayOflong $ExperimentIds
     * @return \PMG\BingAds\CampaignManagement\GetExperimentsByIdsRequest
     */
    public function setExperimentIds($ExperimentIds)
    {
        $this->ExperimentIds = $ExperimentIds;
        return $this;
    }

    /**
     * @return Paging
     */
    public function getPageInfo()
    {
        return $this->PageInfo;
    }

    /**
     * @param Paging $PageInfo
     * @return \PMG\BingAds\CampaignManagement\GetExperimentsByIdsRequest
     */
    public function setPageInfo($PageInfo)
    {
        $this->PageInfo = $PageInfo;
        return $this;
    }

}
