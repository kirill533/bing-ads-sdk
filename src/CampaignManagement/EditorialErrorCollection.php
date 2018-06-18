<?php

namespace PMG\BingAds\CampaignMangagement;

class EditorialErrorCollection extends BatchErrorCollection
{

    /**
     * @var boolean $Appealable
     */
    protected $Appealable = null;

    /**
     * @var string $DisapprovedText
     */
    protected $DisapprovedText = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $PublisherCountry
     */
    protected $PublisherCountry = null;

    /**
     * @var int $ReasonCode
     */
    protected $ReasonCode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAppealable()
    {
      return $this->Appealable;
    }

    /**
     * @param boolean $Appealable
     * @return \PMG\BingAds\CampaignMangagement\EditorialErrorCollection
     */
    public function setAppealable($Appealable)
    {
      $this->Appealable = $Appealable;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisapprovedText()
    {
      return $this->DisapprovedText;
    }

    /**
     * @param string $DisapprovedText
     * @return \PMG\BingAds\CampaignMangagement\EditorialErrorCollection
     */
    public function setDisapprovedText($DisapprovedText)
    {
      $this->DisapprovedText = $DisapprovedText;
      return $this;
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
     * @return \PMG\BingAds\CampaignMangagement\EditorialErrorCollection
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisherCountry()
    {
      return $this->PublisherCountry;
    }

    /**
     * @param string $PublisherCountry
     * @return \PMG\BingAds\CampaignMangagement\EditorialErrorCollection
     */
    public function setPublisherCountry($PublisherCountry)
    {
      $this->PublisherCountry = $PublisherCountry;
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
     * @return \PMG\BingAds\CampaignMangagement\EditorialErrorCollection
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

}
