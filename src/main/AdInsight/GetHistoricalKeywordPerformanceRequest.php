<?php

namespace PMG\BingAds\AdInsight;

class GetHistoricalKeywordPerformanceRequest
{

    /**
     * @var ArrayOfstring $Keywords
     */
    protected $Keywords = null;

    /**
     * @var TimeInterval $TimeInterval
     */
    protected $TimeInterval = null;

    /**
     * @var AdPosition $TargetAdPosition
     */
    protected $TargetAdPosition = null;

    /**
     * @var ArrayOfMatchType $MatchTypes
     */
    protected $MatchTypes = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var ArrayOfstring $PublisherCountries
     */
    protected $PublisherCountries = null;

    /**
     * @var ArrayOfstring $Devices
     */
    protected $Devices = null;

    /**
     * @param ArrayOfstring $Keywords
     * @param TimeInterval $TimeInterval
     * @param AdPosition $TargetAdPosition
     * @param ArrayOfMatchType $MatchTypes
     * @param string $Language
     * @param ArrayOfstring $PublisherCountries
     * @param ArrayOfstring $Devices
     */
    public function __construct($Keywords = null, $TimeInterval = null, $TargetAdPosition = null, $MatchTypes = null, $Language = null, $PublisherCountries = null, $Devices = null)
    {
    $this->Keywords = $Keywords;
    $this->TimeInterval = $TimeInterval;
    $this->TargetAdPosition = $TargetAdPosition;
    $this->MatchTypes = $MatchTypes;
    $this->Language = $Language;
    $this->PublisherCountries = $PublisherCountries;
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
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceRequest
     */
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }

    /**
     * @return TimeInterval
     */
    public function getTimeInterval()
    {
        return $this->TimeInterval;
    }

    /**
     * @param TimeInterval $TimeInterval
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceRequest
     */
    public function setTimeInterval($TimeInterval)
    {
        $this->TimeInterval = $TimeInterval;
        return $this;
    }

    /**
     * @return AdPosition
     */
    public function getTargetAdPosition()
    {
        return $this->TargetAdPosition;
    }

    /**
     * @param AdPosition $TargetAdPosition
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceRequest
     */
    public function setTargetAdPosition($TargetAdPosition)
    {
        $this->TargetAdPosition = $TargetAdPosition;
        return $this;
    }

    /**
     * @return ArrayOfMatchType
     */
    public function getMatchTypes()
    {
        return $this->MatchTypes;
    }

    /**
     * @param ArrayOfMatchType $MatchTypes
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceRequest
     */
    public function setMatchTypes($MatchTypes)
    {
        $this->MatchTypes = $MatchTypes;
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
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceRequest
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
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceRequest
     */
    public function setPublisherCountries($PublisherCountries)
    {
        $this->PublisherCountries = $PublisherCountries;
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
     * @return \PMG\BingAds\AdInsight\GetHistoricalKeywordPerformanceRequest
     */
    public function setDevices($Devices)
    {
        $this->Devices = $Devices;
        return $this;
    }

}
