<?php

namespace PMG\BingAds\CampaignMangagement;

class ImageMediaRepresentation extends MediaRepresentation
{

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \PMG\BingAds\CampaignMangagement\ImageMediaRepresentation
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \PMG\BingAds\CampaignMangagement\ImageMediaRepresentation
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

}
