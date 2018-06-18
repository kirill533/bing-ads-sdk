<?php

namespace PMG\BingAds\CampaignMangagement;

class Image extends Media
{

    /**
     * @var string $Data
     */
    protected $Data = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param string $Data
     * @return \PMG\BingAds\CampaignMangagement\Image
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

}
