<?php

namespace PMG\BingAds\CampaignManagement;

class BidStrategy
{

    /**
     * @var CampaignType $AssociatedCampaignType
     */
    protected $AssociatedCampaignType = null;

    /**
     * @var int $AssociationCount
     */
    protected $AssociationCount = null;

    /**
     * @var BiddingScheme $BiddingScheme
     */
    protected $BiddingScheme = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignType
     */
    public function getAssociatedCampaignType()
    {
        return $this->AssociatedCampaignType;
    }

    /**
     * @param CampaignType $AssociatedCampaignType
     * @return \PMG\BingAds\CampaignManagement\BidStrategy
     */
    public function setAssociatedCampaignType($AssociatedCampaignType)
    {
        $this->AssociatedCampaignType = $AssociatedCampaignType;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\BidStrategy
     */
    public function setAssociationCount($AssociationCount)
    {
        $this->AssociationCount = $AssociationCount;
        return $this;
    }

    /**
     * @return BiddingScheme
     */
    public function getBiddingScheme()
    {
        return $this->BiddingScheme;
    }

    /**
     * @param BiddingScheme $BiddingScheme
     * @return \PMG\BingAds\CampaignManagement\BidStrategy
     */
    public function setBiddingScheme($BiddingScheme)
    {
        $this->BiddingScheme = $BiddingScheme;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignManagement\BidStrategy
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\BidStrategy
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

}
