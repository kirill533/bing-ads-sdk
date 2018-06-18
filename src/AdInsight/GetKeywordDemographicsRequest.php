<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordDemographicsRequest
{

    /**
     * @var ArrayOfstring $Keywords
     */
    protected $Keywords = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $PublisherCountry
     */
    protected $PublisherCountry = null;

    /**
     * @var ArrayOfstring $Device
     */
    protected $Device = null;

    /**
     * @param ArrayOfstring $Keywords
     * @param string $Language
     * @param string $PublisherCountry
     * @param ArrayOfstring $Device
     */
    public function __construct($Keywords, $Language, $PublisherCountry, $Device)
    {
      $this->Keywords = $Keywords;
      $this->Language = $Language;
      $this->PublisherCountry = $PublisherCountry;
      $this->Device = $Device;
    }

    /**
     * @return ArrayOfstring
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfstring $Keywords
     * @return \PMG\BingAds\AdInsight\GetKeywordDemographicsRequest
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\AdInsight\GetKeywordDemographicsRequest
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
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
     * @return \PMG\BingAds\AdInsight\GetKeywordDemographicsRequest
     */
    public function setPublisherCountry($PublisherCountry)
    {
      $this->PublisherCountry = $PublisherCountry;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDevice()
    {
      return $this->Device;
    }

    /**
     * @param ArrayOfstring $Device
     * @return \PMG\BingAds\AdInsight\GetKeywordDemographicsRequest
     */
    public function setDevice($Device)
    {
      $this->Device = $Device;
      return $this;
    }

}
