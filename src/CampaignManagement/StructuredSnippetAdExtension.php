<?php

namespace PMG\BingAds\CampaignMangagement;

class StructuredSnippetAdExtension extends AdExtension
{

    /**
     * @var string $Header
     */
    protected $Header = null;

    /**
     * @var ArrayOfstring $Values
     */
    protected $Values = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param string $Header
     * @return \PMG\BingAds\CampaignMangagement\StructuredSnippetAdExtension
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getValues()
    {
      return $this->Values;
    }

    /**
     * @param ArrayOfstring $Values
     * @return \PMG\BingAds\CampaignMangagement\StructuredSnippetAdExtension
     */
    public function setValues($Values)
    {
      $this->Values = $Values;
      return $this;
    }

}
