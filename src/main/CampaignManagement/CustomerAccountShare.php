<?php

namespace PMG\BingAds\CampaignManagement;

class CustomerAccountShare
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfCustomerAccountShareAssociation $Associations
     */
    protected $Associations = null;

    /**
     * @var int $CustomerId
     */
    protected $CustomerId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\CustomerAccountShare
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return ArrayOfCustomerAccountShareAssociation
     */
    public function getAssociations()
    {
        return $this->Associations;
    }

    /**
     * @param ArrayOfCustomerAccountShareAssociation $Associations
     * @return \PMG\BingAds\CampaignManagement\CustomerAccountShare
     */
    public function setAssociations($Associations)
    {
        $this->Associations = $Associations;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->CustomerId;
    }

    /**
     * @param int $CustomerId
     * @return \PMG\BingAds\CampaignManagement\CustomerAccountShare
     */
    public function setCustomerId($CustomerId)
    {
        $this->CustomerId = $CustomerId;
        return $this;
    }

}
