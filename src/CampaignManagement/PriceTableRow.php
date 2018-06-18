<?php

namespace PMG\BingAds\CampaignMangagement;

class PriceTableRow
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfstring $FinalMobileUrls
     */
    protected $FinalMobileUrls = null;

    /**
     * @var ArrayOfstring $FinalUrls
     */
    protected $FinalUrls = null;

    /**
     * @var string $Header
     */
    protected $Header = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var PriceQualifier $PriceQualifier
     */
    protected $PriceQualifier = null;

    /**
     * @var PriceUnit $PriceUnit
     */
    protected $PriceUnit = null;

    /**
     * @var string $TermsAndConditions
     */
    protected $TermsAndConditions = null;

    /**
     * @var string $TermsAndConditionsUrl
     */
    protected $TermsAndConditionsUrl = null;

    /**
     * @param float $Price
     * @param PriceQualifier $PriceQualifier
     * @param PriceUnit $PriceUnit
     */
    public function __construct($Price, $PriceQualifier, $PriceUnit)
    {
      $this->Price = $Price;
      $this->PriceQualifier = $PriceQualifier;
      $this->PriceUnit = $PriceUnit;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFinalMobileUrls()
    {
      return $this->FinalMobileUrls;
    }

    /**
     * @param ArrayOfstring $FinalMobileUrls
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setFinalMobileUrls($FinalMobileUrls)
    {
      $this->FinalMobileUrls = $FinalMobileUrls;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFinalUrls()
    {
      return $this->FinalUrls;
    }

    /**
     * @param ArrayOfstring $FinalUrls
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setFinalUrls($FinalUrls)
    {
      $this->FinalUrls = $FinalUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeader()
    {
      return $this->Header;
    }

    /**
     * @param string $Header
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setHeader($Header)
    {
      $this->Header = $Header;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return PriceQualifier
     */
    public function getPriceQualifier()
    {
      return $this->PriceQualifier;
    }

    /**
     * @param PriceQualifier $PriceQualifier
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setPriceQualifier($PriceQualifier)
    {
      $this->PriceQualifier = $PriceQualifier;
      return $this;
    }

    /**
     * @return PriceUnit
     */
    public function getPriceUnit()
    {
      return $this->PriceUnit;
    }

    /**
     * @param PriceUnit $PriceUnit
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setPriceUnit($PriceUnit)
    {
      $this->PriceUnit = $PriceUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsAndConditions()
    {
      return $this->TermsAndConditions;
    }

    /**
     * @param string $TermsAndConditions
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setTermsAndConditions($TermsAndConditions)
    {
      $this->TermsAndConditions = $TermsAndConditions;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsAndConditionsUrl()
    {
      return $this->TermsAndConditionsUrl;
    }

    /**
     * @param string $TermsAndConditionsUrl
     * @return \PMG\BingAds\CampaignMangagement\PriceTableRow
     */
    public function setTermsAndConditionsUrl($TermsAndConditionsUrl)
    {
      $this->TermsAndConditionsUrl = $TermsAndConditionsUrl;
      return $this;
    }

}
