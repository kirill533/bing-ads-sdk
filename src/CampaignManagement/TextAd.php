<?php

namespace PMG\BingAds\CampaignManagement;

class TextAd extends Ad
{

    /**
     * @var string $DestinationUrl
     */
    protected $DestinationUrl = null;

    /**
     * @var string $DisplayUrl
     */
    protected $DisplayUrl = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDestinationUrl()
    {
      return $this->DestinationUrl;
    }

    /**
     * @param string $DestinationUrl
     * @return \PMG\BingAds\CampaignManagement\TextAd
     */
    public function setDestinationUrl($DestinationUrl)
    {
      $this->DestinationUrl = $DestinationUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayUrl()
    {
      return $this->DisplayUrl;
    }

    /**
     * @param string $DisplayUrl
     * @return \PMG\BingAds\CampaignManagement\TextAd
     */
    public function setDisplayUrl($DisplayUrl)
    {
      $this->DisplayUrl = $DisplayUrl;
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
     * @return \PMG\BingAds\CampaignManagement\TextAd
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \PMG\BingAds\CampaignManagement\TextAd
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
