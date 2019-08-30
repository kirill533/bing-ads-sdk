<?php

namespace PMG\BingAds\CampaignManagement;

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

    /**
     * @var string $TextPart2
     */
    protected $TextPart2 = null;

    
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
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAd
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
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAd
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
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAd
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
     * @return \PMG\BingAds\CampaignManagement\DynamicSearchAd
     */
    public function setTextPart2($TextPart2)
    {
        $this->TextPart2 = $TextPart2;
        return $this;
    }

}
