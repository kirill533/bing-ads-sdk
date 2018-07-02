<?php

namespace PMG\BingAds\CampaignManagement;

class AdExtensionEditorialReason
{

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var ArrayOfstring $PublisherCountries
     */
    protected $PublisherCountries = null;

    /**
     * @var int $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \PMG\BingAds\CampaignManagement\AdExtensionEditorialReason
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPublisherCountries()
    {
      return $this->PublisherCountries;
    }

    /**
     * @param ArrayOfstring $PublisherCountries
     * @return \PMG\BingAds\CampaignManagement\AdExtensionEditorialReason
     */
    public function setPublisherCountries($PublisherCountries)
    {
      $this->PublisherCountries = $PublisherCountries;
      return $this;
    }

    /**
     * @return int
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param int $ReasonCode
     * @return \PMG\BingAds\CampaignManagement\AdExtensionEditorialReason
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
      return $this->Term;
    }

    /**
     * @param string $Term
     * @return \PMG\BingAds\CampaignManagement\AdExtensionEditorialReason
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

}
