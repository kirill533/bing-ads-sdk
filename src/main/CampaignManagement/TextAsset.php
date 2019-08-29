<?php

namespace PMG\BingAds\CampaignManagement;

class TextAsset extends Asset
{

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
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \PMG\BingAds\CampaignManagement\TextAsset
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
