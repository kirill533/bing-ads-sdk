<?php

namespace PMG\BingAds\CampaignMangagement;

class CoOpSetting extends Setting
{

    /**
     * @var float $BidBoostValue
     */
    protected $BidBoostValue = null;

    /**
     * @var float $BidMaxValue
     */
    protected $BidMaxValue = null;

    /**
     * @var BidOption $BidOption
     */
    protected $BidOption = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getBidBoostValue()
    {
      return $this->BidBoostValue;
    }

    /**
     * @param float $BidBoostValue
     * @return \PMG\BingAds\CampaignMangagement\CoOpSetting
     */
    public function setBidBoostValue($BidBoostValue)
    {
      $this->BidBoostValue = $BidBoostValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidMaxValue()
    {
      return $this->BidMaxValue;
    }

    /**
     * @param float $BidMaxValue
     * @return \PMG\BingAds\CampaignMangagement\CoOpSetting
     */
    public function setBidMaxValue($BidMaxValue)
    {
      $this->BidMaxValue = $BidMaxValue;
      return $this;
    }

    /**
     * @return BidOption
     */
    public function getBidOption()
    {
      return $this->BidOption;
    }

    /**
     * @param BidOption $BidOption
     * @return \PMG\BingAds\CampaignMangagement\CoOpSetting
     */
    public function setBidOption($BidOption)
    {
      $this->BidOption = $BidOption;
      return $this;
    }

}
