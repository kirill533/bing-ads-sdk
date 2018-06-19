<?php

namespace PMG\BingAds\CampaignManagement;

class ProductAd extends Ad
{

    /**
     * @var string $PromotionalText
     */
    protected $PromotionalText = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getPromotionalText()
    {
      return $this->PromotionalText;
    }

    /**
     * @param string $PromotionalText
     * @return \PMG\BingAds\CampaignManagement\ProductAd
     */
    public function setPromotionalText($PromotionalText)
    {
      $this->PromotionalText = $PromotionalText;
      return $this;
    }

}
