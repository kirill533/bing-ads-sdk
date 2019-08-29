<?php

namespace PMG\BingAds\CampaignManagement;

class SearchCompaniesRequest
{

    /**
     * @var string $CompanyNameFilter
     */
    protected $CompanyNameFilter = null;

    /**
     * @var string $LanguageLocale
     */
    protected $LanguageLocale = null;

    /**
     * @param string $CompanyNameFilter
     * @param string $LanguageLocale
     */
    public function __construct($CompanyNameFilter = null, $LanguageLocale = null)
    {
      $this->CompanyNameFilter = $CompanyNameFilter;
      $this->LanguageLocale = $LanguageLocale;
    }

    /**
     * @return string
     */
    public function getCompanyNameFilter()
    {
      return $this->CompanyNameFilter;
    }

    /**
     * @param string $CompanyNameFilter
     * @return \PMG\BingAds\CampaignManagement\SearchCompaniesRequest
     */
    public function setCompanyNameFilter($CompanyNameFilter)
    {
      $this->CompanyNameFilter = $CompanyNameFilter;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageLocale()
    {
      return $this->LanguageLocale;
    }

    /**
     * @param string $LanguageLocale
     * @return \PMG\BingAds\CampaignManagement\SearchCompaniesRequest
     */
    public function setLanguageLocale($LanguageLocale)
    {
      $this->LanguageLocale = $LanguageLocale;
      return $this;
    }

}
