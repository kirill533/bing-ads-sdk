<?php

namespace PMG\BingAds\Reporting;

class UserLocationPerformanceReportFilter
{

    /**
     * @var AdDistributionReportFilter $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @var ArrayOfstring $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var LanguageReportFilter $Language
     */
    protected $Language = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdDistributionReportFilter
     */
    public function getAdDistribution()
    {
        return $this->AdDistribution;
    }

    /**
     * @param AdDistributionReportFilter $AdDistribution
     * @return \PMG\BingAds\Reporting\UserLocationPerformanceReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
        $this->AdDistribution = $AdDistribution;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param ArrayOfstring $CountryCode
     * @return \PMG\BingAds\Reporting\UserLocationPerformanceReportFilter
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return LanguageReportFilter
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param LanguageReportFilter $Language
     * @return \PMG\BingAds\Reporting\UserLocationPerformanceReportFilter
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

}
