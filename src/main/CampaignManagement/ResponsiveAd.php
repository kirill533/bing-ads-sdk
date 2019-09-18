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
     * @var ArrayOfAssetLink $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @var string $Headline
     */
    protected $Headline = null;

    /**
     * @var ArrayOfAssetLink $Headlines
     */
    protected $Headlines = null;

    /**
     * @var ArrayOfAssetLink $Images
     */
    protected $Images = null;

    /**
     * @var AssetLink $LongHeadline
     */
    protected $LongHeadline = null;

    /**
     * @var string $LongHeadlineString
     */
    protected $LongHeadlineString = null;

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
     * @return ArrayOfAssetLink
     */
    public function getDescriptions()
    {
        return $this->Descriptions;
    }

    /**
     * @param ArrayOfAssetLink $Descriptions
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setDescriptions($Descriptions)
    {
        $this->Descriptions = $Descriptions;
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
     * @return ArrayOfAssetLink
     */
    public function getHeadlines()
    {
        return $this->Headlines;
    }

    /**
     * @param ArrayOfAssetLink $Headlines
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setHeadlines($Headlines)
    {
        $this->Headlines = $Headlines;
        return $this;
    }

    /**
     * @return ArrayOfAssetLink
     */
    public function getImages()
    {
        return $this->Images;
    }

    /**
     * @param ArrayOfAssetLink $Images
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setImages($Images)
    {
        $this->Images = $Images;
        return $this;
    }

    /**
     * @return AssetLink
     */
    public function getLongHeadline()
    {
        return $this->LongHeadline;
    }

    /**
     * @param AssetLink $LongHeadline
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setLongHeadline($LongHeadline)
    {
        $this->LongHeadline = $LongHeadline;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongHeadlineString()
    {
        return $this->LongHeadlineString;
    }

    /**
     * @param string $LongHeadlineString
     * @return \PMG\BingAds\CampaignManagement\ResponsiveAd
     */
    public function setLongHeadlineString($LongHeadlineString)
    {
        $this->LongHeadlineString = $LongHeadlineString;
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
