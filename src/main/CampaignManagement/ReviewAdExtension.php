<?php

namespace PMG\BingAds\CampaignManagement;

class ReviewAdExtension extends AdExtension
{

    /**
     * @var boolean $IsExact
     */
    protected $IsExact = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsExact()
    {
      return $this->IsExact;
    }

    /**
     * @param boolean $IsExact
     * @return \PMG\BingAds\CampaignManagement\ReviewAdExtension
     */
    public function setIsExact($IsExact)
    {
      $this->IsExact = $IsExact;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \PMG\BingAds\CampaignManagement\ReviewAdExtension
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
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
     * @return \PMG\BingAds\CampaignManagement\ReviewAdExtension
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return \PMG\BingAds\CampaignManagement\ReviewAdExtension
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

}
