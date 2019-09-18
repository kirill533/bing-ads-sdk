<?php

namespace PMG\BingAds\CampaignManagement;

class CustomerAccountShareAssociation
{

    /**
     * @var int $AssociationCount
     */
    protected $AssociationCount = null;

    /**
     * @var string $UsageType
     */
    protected $UsageType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAssociationCount()
    {
        return $this->AssociationCount;
    }

    /**
     * @param int $AssociationCount
     * @return \PMG\BingAds\CampaignManagement\CustomerAccountShareAssociation
     */
    public function setAssociationCount($AssociationCount)
    {
        $this->AssociationCount = $AssociationCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsageType()
    {
        return $this->UsageType;
    }

    /**
     * @param string $UsageType
     * @return \PMG\BingAds\CampaignManagement\CustomerAccountShareAssociation
     */
    public function setUsageType($UsageType)
    {
        $this->UsageType = $UsageType;
        return $this;
    }

}
