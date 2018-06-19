<?php

namespace PMG\BingAds\CampaignManagement;

class SetAccountPropertiesRequest
{

    /**
     * @var ArrayOfAccountProperty $AccountProperties
     */
    protected $AccountProperties = null;

    /**
     * @param ArrayOfAccountProperty $AccountProperties
     */
    public function __construct($AccountProperties = null)
    {
      $this->AccountProperties = $AccountProperties;
    }

    /**
     * @return ArrayOfAccountProperty
     */
    public function getAccountProperties()
    {
      return $this->AccountProperties;
    }

    /**
     * @param ArrayOfAccountProperty $AccountProperties
     * @return \PMG\BingAds\CampaignManagement\SetAccountPropertiesRequest
     */
    public function setAccountProperties($AccountProperties)
    {
      $this->AccountProperties = $AccountProperties;
      return $this;
    }

}
