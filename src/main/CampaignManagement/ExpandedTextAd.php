<?php

namespace PMG\BingAds\CampaignManagement;

class ExpandedTextAd extends Ad
{

    /**
     * @var string $Domain
     */
    protected $Domain = null;

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

    /**
     * @var string $TextPart2
     */
    protected $TextPart2 = null;

    /**
     * @var string $TitlePart1
     */
    protected $TitlePart1 = null;

    /**
     * @var string $TitlePart2
     */
    protected $TitlePart2 = null;

    /**
     * @var string $TitlePart3
     */
    protected $TitlePart3 = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * @param string $Domain
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
     */
    public function setDomain($Domain)
    {
        $this->Domain = $Domain;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
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
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
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
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
     */
    public function setText($Text)
    {
        $this->Text = $Text;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextPart2()
    {
        return $this->TextPart2;
    }

    /**
     * @param string $TextPart2
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
     */
    public function setTextPart2($TextPart2)
    {
        $this->TextPart2 = $TextPart2;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitlePart1()
    {
        return $this->TitlePart1;
    }

    /**
     * @param string $TitlePart1
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
     */
    public function setTitlePart1($TitlePart1)
    {
        $this->TitlePart1 = $TitlePart1;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitlePart2()
    {
        return $this->TitlePart2;
    }

    /**
     * @param string $TitlePart2
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
     */
    public function setTitlePart2($TitlePart2)
    {
        $this->TitlePart2 = $TitlePart2;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitlePart3()
    {
        return $this->TitlePart3;
    }

    /**
     * @param string $TitlePart3
     * @return \PMG\BingAds\CampaignManagement\ExpandedTextAd
     */
    public function setTitlePart3($TitlePart3)
    {
        $this->TitlePart3 = $TitlePart3;
        return $this;
    }

}
