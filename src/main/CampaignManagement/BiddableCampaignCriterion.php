<?php

namespace PMG\BingAds\CampaignManagement;

class BiddableCampaignCriterion extends CampaignCriterion
{

    /**
     * @var CriterionBid $CriterionBid
     */
    protected $CriterionBid = null;

    /**
     * @var CriterionCashback $CriterionCashback
     */
    protected $CriterionCashback = null;

    /**
     * @param int $CampaignId
     */
    public function __construct($CampaignId = null)
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
     * @return \PMG\BingAds\CampaignManagement\BiddableCampaignCriterion
     */
    public function setCriterionBid($CriterionBid)
    {
        $this->CriterionBid = $CriterionBid;
        return $this;
    }

    /**
     * @return CriterionCashback
     */
    public function getCriterionCashback()
    {
        return $this->CriterionCashback;
    }

    /**
     * @param CriterionCashback $CriterionCashback
     * @return \PMG\BingAds\CampaignManagement\BiddableCampaignCriterion
     */
    public function setCriterionCashback($CriterionCashback)
    {
        $this->CriterionCashback = $CriterionCashback;
        return $this;
    }

}
