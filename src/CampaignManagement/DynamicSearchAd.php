<?php

namespace PMG\BingAds\CampaignMangagement;

class DynamicSearchAd extends Ad
{

    /**
     * @var string $Path1
     */
    protected $Path1 = null;

    /**
     * @var string $Path2
     */
    protected $Path2 = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getPath1()
    {
      return $this->Path1;
    }

    /**
     * @param string $Path1
     * @return \PMG\BingAds\CampaignMangagement\DynamicSearchAd
     */
    public function setPath1($Path1)
    {
      $this->Path1 = $Path1;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath2()
    {
      return $this->Path2;
    }

    /**
     * @param string $Path2
     * @return \PMG\BingAds\CampaignMangagement\DynamicSearchAd
     */
    public function setPath2($Path2)
    {
      $this->Path2 = $Path2;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \PMG\BingAds\CampaignMangagement\DynamicSearchAd
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
