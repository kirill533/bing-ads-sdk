<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAccountPropertiesRequest
{

    /**
     * @var ArrayOfAccountPropertyName $AccountPropertyNames
     */
    protected $AccountPropertyNames = null;

    /**
     * @param ArrayOfAccountPropertyName $AccountPropertyNames
     */
    public function __construct($AccountPropertyNames)
    {
      $this->AccountPropertyNames = $AccountPropertyNames;
    }

    /**
     * @return ArrayOfAccountPropertyName
     */
    public function getAccountPropertyNames()
    {
      return $this->AccountPropertyNames;
    }

    /**
     * @param ArrayOfAccountPropertyName $AccountPropertyNames
     * @return \PMG\BingAds\CampaignMangagement\GetAccountPropertiesRequest
     */
    public function setAccountPropertyNames($AccountPropertyNames)
    {
      $this->AccountPropertyNames = $AccountPropertyNames;
      return $this;
    }

}
