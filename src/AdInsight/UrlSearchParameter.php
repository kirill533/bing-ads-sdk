<?php

namespace PMG\BingAds\AdInsight;

class UrlSearchParameter extends SearchParameter
{

    /**
     * @var string $Url
     */
    protected $Url = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\AdInsight\UrlSearchParameter
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

}
