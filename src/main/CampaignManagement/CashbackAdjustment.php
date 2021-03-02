<?php

namespace PMG\BingAds\CampaignManagement;

class CashbackAdjustment extends CriterionCashback
{

    /**
     * @var float $CashbackPercent
     */
    protected $CashbackPercent = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return float
     */
    public function getCashbackPercent()
    {
        return $this->CashbackPercent;
    }

    /**
     * @param float $CashbackPercent
     * @return \PMG\BingAds\CampaignManagement\CashbackAdjustment
     */
    public function setCashbackPercent($CashbackPercent)
    {
        $this->CashbackPercent = $CashbackPercent;
        return $this;
    }

}
