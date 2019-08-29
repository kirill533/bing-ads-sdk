<?php

namespace PMG\BingAds\CampaignManagement;

class SearchCompaniesResponse
{

    /**
     * @var ArrayOfCompany $Companies
     */
    protected $Companies = null;

    /**
     * @param ArrayOfCompany $Companies
     */
    public function __construct($Companies = null)
    {
      $this->Companies = $Companies;
    }

    /**
     * @return ArrayOfCompany
     */
    public function getCompanies()
    {
      return $this->Companies;
    }

    /**
     * @param ArrayOfCompany $Companies
     * @return \PMG\BingAds\CampaignManagement\SearchCompaniesResponse
     */
    public function setCompanies($Companies)
    {
      $this->Companies = $Companies;
      return $this;
    }

}
