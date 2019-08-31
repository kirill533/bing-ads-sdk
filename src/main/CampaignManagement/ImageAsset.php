<?php

namespace PMG\BingAds\CampaignManagement;

class ImageAsset extends Asset
{

    /**
     * @var int $CropHeight
     */
    protected $CropHeight = null;

    /**
     * @var int $CropWidth
     */
    protected $CropWidth = null;

    /**
     * @var int $CropX
     */
    protected $CropX = null;

    /**
     * @var int $CropY
     */
    protected $CropY = null;

    /**
     * @var string $SubType
     */
    protected $SubType = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getCropHeight()
    {
        return $this->CropHeight;
    }

    /**
     * @param int $CropHeight
     * @return \PMG\BingAds\CampaignManagement\ImageAsset
     */
    public function setCropHeight($CropHeight)
    {
        $this->CropHeight = $CropHeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getCropWidth()
    {
        return $this->CropWidth;
    }

    /**
     * @param int $CropWidth
     * @return \PMG\BingAds\CampaignManagement\ImageAsset
     */
    public function setCropWidth($CropWidth)
    {
        $this->CropWidth = $CropWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getCropX()
    {
        return $this->CropX;
    }

    /**
     * @param int $CropX
     * @return \PMG\BingAds\CampaignManagement\ImageAsset
     */
    public function setCropX($CropX)
    {
        $this->CropX = $CropX;
        return $this;
    }

    /**
     * @return int
     */
    public function getCropY()
    {
        return $this->CropY;
    }

    /**
     * @param int $CropY
     * @return \PMG\BingAds\CampaignManagement\ImageAsset
     */
    public function setCropY($CropY)
    {
        $this->CropY = $CropY;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
        return $this->SubType;
    }

    /**
     * @param string $SubType
     * @return \PMG\BingAds\CampaignManagement\ImageAsset
     */
    public function setSubType($SubType)
    {
        $this->SubType = $SubType;
        return $this;
    }

}
