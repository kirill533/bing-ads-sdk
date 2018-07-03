<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @see \PMG\BingAds\CampaignManagement\BidOption for valid values
     *
     * @var string $BidOption
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
     * @return \PMG\BingAds\CampaignManagement\CoOpSetting
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
     * @return \PMG\BingAds\CampaignManagement\CoOpSetting
     */
    public function setBidMaxValue($BidMaxValue)
    {
      $this->BidMaxValue = $BidMaxValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getBidOption()
    {
      return $this->BidOption;
    }

    /**
     * @param string $BidOption
     * @return \PMG\BingAds\CampaignManagement\CoOpSetting
     */
    public function setBidOption($BidOption)
    {
      $this->BidOption = $BidOption;
      return $this;
    }

}
