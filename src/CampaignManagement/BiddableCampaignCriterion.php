<?php

namespace PMG\BingAds\CampaignMangagement;

class BiddableCampaignCriterion extends CampaignCriterion
{

    /**
     * @var CriterionBid $CriterionBid
     */
    protected $CriterionBid = null;

    /**
     * @param int $CampaignId
     */
    public function __construct($CampaignId)
    {
      parent::__construct($CampaignId);
    }

    /**
     * @return CriterionBid
     */
    public function getCriterionBid()
    {
      return $this->CriterionBid;
    }

    /**
     * @param CriterionBid $CriterionBid
     * @return \PMG\BingAds\CampaignMangagement\BiddableCampaignCriterion
     */
    public function setCriterionBid($CriterionBid)
    {
      $this->CriterionBid = $CriterionBid;
      return $this;
    }

}
