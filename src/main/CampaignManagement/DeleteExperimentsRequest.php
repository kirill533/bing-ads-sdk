<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteExperimentsRequest
{

    /**
     * @var ArrayOflong $ExperimentIds
     */
    protected $ExperimentIds = null;

    /**
     * @param ArrayOflong $ExperimentIds
     */
    public function __construct($ExperimentIds = null)
    {
    $this->ExperimentIds = $ExperimentIds;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteExperimentsRequest
     */
    public function setExperimentIds($ExperimentIds)
    {
        $this->ExperimentIds = $ExperimentIds;
        return $this;
    }

}
