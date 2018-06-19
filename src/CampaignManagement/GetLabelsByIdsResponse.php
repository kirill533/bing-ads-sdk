<?php

namespace PMG\BingAds\CampaignManagement;

class GetLabelsByIdsResponse
{

    /**
     * @var ArrayOfLabel $Labels
     */
    protected $Labels = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfLabel $Labels
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Labels, $PartialErrors)
    {
      $this->Labels = $Labels;
      $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfLabel
     */
    public function getLabels()
    {
      return $this->Labels;
    }

    /**
     * @param ArrayOfLabel $Labels
     * @return \PMG\BingAds\CampaignManagement\GetLabelsByIdsResponse
     */
    public function setLabels($Labels)
    {
      $this->Labels = $Labels;
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
     * @return \PMG\BingAds\CampaignManagement\GetLabelsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
