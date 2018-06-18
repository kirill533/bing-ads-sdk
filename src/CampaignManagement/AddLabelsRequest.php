<?php

namespace PMG\BingAds\CampaignMangagement;

class AddLabelsRequest
{

    /**
     * @var ArrayOfLabel $Labels
     */
    protected $Labels = null;

    /**
     * @param ArrayOfLabel $Labels
     */
    public function __construct($Labels)
    {
      $this->Labels = $Labels;
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
     * @return \PMG\BingAds\CampaignMangagement\AddLabelsRequest
     */
    public function setLabels($Labels)
    {
      $this->Labels = $Labels;
      return $this;
    }

}
