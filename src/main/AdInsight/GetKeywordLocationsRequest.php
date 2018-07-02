<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordLocationsRequest
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
     * @var int $Level
     */
    protected $Level = null;

    /**
     * @var string $ParentCountry
     */
    protected $ParentCountry = null;

    /**
     * @var int $MaxLocations
     */
    protected $MaxLocations = null;

    /**
     * @param ArrayOfstring $Keywords
     * @param string $Language
     * @param string $PublisherCountry
     * @param ArrayOfstring $Device
     * @param int $Level
     * @param string $ParentCountry
     * @param int $MaxLocations
     */
    public function __construct($Keywords = null, $Language = null, $PublisherCountry = null, $Device = null, $Level = null, $ParentCountry = null, $MaxLocations = null)
    {
      $this->Keywords = $Keywords;
      $this->Language = $Language;
      $this->PublisherCountry = $PublisherCountry;
      $this->Device = $Device;
      $this->Level = $Level;
      $this->ParentCountry = $ParentCountry;
      $this->MaxLocations = $MaxLocations;
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
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsRequest
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
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsRequest
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
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsRequest
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
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsRequest
     */
    public function setDevice($Device)
    {
      $this->Device = $Device;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param int $Level
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsRequest
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentCountry()
    {
      return $this->ParentCountry;
    }

    /**
     * @param string $ParentCountry
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsRequest
     */
    public function setParentCountry($ParentCountry)
    {
      $this->ParentCountry = $ParentCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxLocations()
    {
      return $this->MaxLocations;
    }

    /**
     * @param int $MaxLocations
     * @return \PMG\BingAds\AdInsight\GetKeywordLocationsRequest
     */
    public function setMaxLocations($MaxLocations)
    {
      $this->MaxLocations = $MaxLocations;
      return $this;
    }

}
