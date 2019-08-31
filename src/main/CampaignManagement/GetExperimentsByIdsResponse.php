<?php

namespace PMG\BingAds\CampaignManagement;

class GetExperimentsByIdsResponse
{

    /**
     * @var ArrayOfExperiment $Experiments
     */
    protected $Experiments = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfExperiment $Experiments
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Experiments = null, $PartialErrors = null)
    {
    $this->Experiments = $Experiments;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfExperiment
     */
    public function getExperiments()
    {
        return $this->Experiments;
    }

    /**
     * @param ArrayOfExperiment $Experiments
     * @return \PMG\BingAds\CampaignManagement\GetExperimentsByIdsResponse
     */
    public function setExperiments($Experiments)
    {
        $this->Experiments = $Experiments;
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
     * @return \PMG\BingAds\CampaignManagement\GetExperimentsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
