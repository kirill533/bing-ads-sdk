<?php

namespace PMG\BingAds\AdInsight;

class GetHistoricalSearchCountRequest
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
     * @var ArrayOfstring $PublisherCountries
     */
    protected $PublisherCountries = null;

    /**
     * @var DayMonthAndYear $StartDate
     */
    protected $StartDate = null;

    /**
     * @var DayMonthAndYear $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $TimePeriodRollup
     */
    protected $TimePeriodRollup = null;

    /**
     * @var ArrayOfstring $Devices
     */
    protected $Devices = null;

    /**
     * @param ArrayOfstring $Keywords
     * @param string $Language
     * @param ArrayOfstring $PublisherCountries
     * @param DayMonthAndYear $StartDate
     * @param DayMonthAndYear $EndDate
     * @param string $TimePeriodRollup
     * @param ArrayOfstring $Devices
     */
    public function __construct($Keywords = null, $Language = null, $PublisherCountries = null, $StartDate = null, $EndDate = null, $TimePeriodRollup = null, $Devices = null)
    {
      $this->Keywords = $Keywords;
      $this->Language = $Language;
      $this->PublisherCountries = $PublisherCountries;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->TimePeriodRollup = $TimePeriodRollup;
      $this->Devices = $Devices;
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
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountRequest
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
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountRequest
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
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
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountRequest
     */
    public function setPublisherCountries($PublisherCountries)
    {
      $this->PublisherCountries = $PublisherCountries;
      return $this;
    }

    /**
     * @return DayMonthAndYear
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param DayMonthAndYear $StartDate
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountRequest
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return DayMonthAndYear
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param DayMonthAndYear $EndDate
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountRequest
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimePeriodRollup()
    {
      return $this->TimePeriodRollup;
    }

    /**
     * @param string $TimePeriodRollup
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountRequest
     */
    public function setTimePeriodRollup($TimePeriodRollup)
    {
      $this->TimePeriodRollup = $TimePeriodRollup;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDevices()
    {
      return $this->Devices;
    }

    /**
     * @param ArrayOfstring $Devices
     * @return \PMG\BingAds\AdInsight\GetHistoricalSearchCountRequest
     */
    public function setDevices($Devices)
    {
      $this->Devices = $Devices;
      return $this;
    }

}
