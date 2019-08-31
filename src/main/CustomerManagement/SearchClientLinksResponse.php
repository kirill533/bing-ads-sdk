<?php

namespace PMG\BingAds\CustomerManagement;

class SearchClientLinksResponse
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
     * @return \PMG\BingAds\CustomerManagement\SearchClientLinksResponse
     */
    public function setClientLinks($ClientLinks)
    {
        $this->ClientLinks = $ClientLinks;
        return $this;
    }

}
