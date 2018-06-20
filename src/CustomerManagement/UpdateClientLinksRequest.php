<?php

namespace PMG\BingAds\CustomerManagement;

class UpdateClientLinksRequest
{

    /**
     * @var ArrayOfClientLink $ClientLinks
     */
    protected $ClientLinks = null;

    /**
     * @param ArrayOfClientLink $ClientLinks
     */
    public function __construct($ClientLinks = null)
    {
      $this->ClientLinks = $ClientLinks;
    }

    /**
     * @return ArrayOfClientLink
     */
    public function getClientLinks()
    {
      return $this->ClientLinks;
    }

    /**
     * @param ArrayOfClientLink $ClientLinks
     * @return \PMG\BingAds\CustomerManagement\UpdateClientLinksRequest
     */
    public function setClientLinks($ClientLinks)
    {
      $this->ClientLinks = $ClientLinks;
      return $this;
    }

}
