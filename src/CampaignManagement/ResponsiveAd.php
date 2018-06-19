<?php

namespace PMG\BingAds\CampaignManagement;

class ResponsiveAd extends Ad
{

    /**
     * @var string $BusinessName
     */
    protected $BusinessName = null;

    /**
     * @var CallToAction $CallToAction
     */
    protected $CallToAction = null;

    /**
     * @var string $Headline
     */
    protected $Headline = null;

    /**
     * @var int $LandscapeImageMediaId
     */
    protected $LandscapeImageMediaId = null;

    /**
     * @var int $LandscapeLogoMediaId
     */
    protected $LandscapeLogoMediaId = null;

    /**
     * @var string $LongHeadline
     */
    protected $LongHeadline = null;

    /**
     * @var int $SquareImageMediaId
     */
    protected $SquareImageMediaId = null;

    /**
     * @var int $SquareLogoMediaId
     */
    protected $SquareLogoMediaId = null;

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
    public function getBusinessName()
    {
      return $this->BusinessName;
    }

    /**
     * @param string $BusinessName
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setBusinessName($BusinessName)
    {
      $this->BusinessName = $BusinessName;
      return $this;
    }

    /**
     * @return CallToAction
     */
    public function getCallToAction()
    {
      return $this->CallToAction;
    }

    /**
     * @param CallToAction $CallToAction
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setCallToAction($CallToAction)
    {
      $this->CallToAction = $CallToAction;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeadline()
    {
      return $this->Headline;
    }

    /**
     * @param string $Headline
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setHeadline($Headline)
    {
      $this->Headline = $Headline;
      return $this;
    }

    /**
     * @return int
     */
    public function getLandscapeImageMediaId()
    {
      return $this->LandscapeImageMediaId;
    }

    /**
     * @param int $LandscapeImageMediaId
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setLandscapeImageMediaId($LandscapeImageMediaId)
    {
      $this->LandscapeImageMediaId = $LandscapeImageMediaId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLandscapeLogoMediaId()
    {
      return $this->LandscapeLogoMediaId;
    }

    /**
     * @param int $LandscapeLogoMediaId
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setLandscapeLogoMediaId($LandscapeLogoMediaId)
    {
      $this->LandscapeLogoMediaId = $LandscapeLogoMediaId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongHeadline()
    {
      return $this->LongHeadline;
    }

    /**
     * @param string $LongHeadline
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setLongHeadline($LongHeadline)
    {
      $this->LongHeadline = $LongHeadline;
      return $this;
    }

    /**
     * @return int
     */
    public function getSquareImageMediaId()
    {
      return $this->SquareImageMediaId;
    }

    /**
     * @param int $SquareImageMediaId
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setSquareImageMediaId($SquareImageMediaId)
    {
      $this->SquareImageMediaId = $SquareImageMediaId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSquareLogoMediaId()
    {
      return $this->SquareLogoMediaId;
    }

    /**
     * @param int $SquareLogoMediaId
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setSquareLogoMediaId($SquareLogoMediaId)
    {
      $this->SquareLogoMediaId = $SquareLogoMediaId;
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
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
