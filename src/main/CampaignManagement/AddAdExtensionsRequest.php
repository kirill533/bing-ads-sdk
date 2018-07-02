<?php

namespace PMG\BingAds\CampaignManagement;

class AddAdExtensionsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfAdExtension $AdExtensions
     */
    protected $AdExtensions = null;

    /**
     * @param int $AccountId
     * @param ArrayOfAdExtension $AdExtensions
     */
    public function __construct($AccountId = null, $AdExtensions = null)
    {
      $this->AccountId = $AccountId;
      $this->AdExtensions = $AdExtensions;
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
     * @return \PMG\BingAds\CampaignManagement\AddAdExtensionsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOfAdExtension
     */
    public function getAdExtensions()
    {
      return $this->AdExtensions;
    }

    /**
     * @param ArrayOfAdExtension $AdExtensions
     * @return \PMG\BingAds\CampaignManagement\AddAdExtensionsRequest
     */
    public function setAdExtensions($AdExtensions)
    {
      $this->AdExtensions = $AdExtensions;
      return $this;
    }

}
