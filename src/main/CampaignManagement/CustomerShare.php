<?php

namespace PMG\BingAds\CampaignManagement;

class CustomerShare
{

    /**
     * @var ArrayOfCustomerAccountShare $CustomerAccountShares
     */
    protected $CustomerAccountShares = null;

    /**
     * @var int $OwnerCustomerId
     */
    protected $OwnerCustomerId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCustomerAccountShare
     */
    public function getCustomerAccountShares()
    {
        return $this->CustomerAccountShares;
    }

    /**
     * @param ArrayOfCustomerAccountShare $CustomerAccountShares
     * @return \PMG\BingAds\CampaignManagement\CustomerShare
     */
    public function setCustomerAccountShares($CustomerAccountShares)
    {
        $this->CustomerAccountShares = $CustomerAccountShares;
        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerCustomerId()
    {
        return $this->OwnerCustomerId;
    }

    /**
     * @param int $OwnerCustomerId
     * @return \PMG\BingAds\CampaignManagement\CustomerShare
     */
    public function setOwnerCustomerId($OwnerCustomerId)
    {
        $this->OwnerCustomerId = $OwnerCustomerId;
        return $this;
    }

}
