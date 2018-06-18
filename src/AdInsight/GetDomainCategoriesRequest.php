<?php

namespace PMG\BingAds\AdInsight;

class GetDomainCategoriesRequest
{

    /**
     * @var string $CategoryName
     */
    protected $CategoryName = null;

    /**
     * @var string $DomainName
     */
    protected $DomainName = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param string $CategoryName
     * @param string $DomainName
     * @param string $Language
     */
    public function __construct($CategoryName, $DomainName, $Language)
    {
      $this->CategoryName = $CategoryName;
      $this->DomainName = $DomainName;
      $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->CategoryName;
    }

    /**
     * @param string $CategoryName
     * @return \PMG\BingAds\AdInsight\GetDomainCategoriesRequest
     */
    public function setCategoryName($CategoryName)
    {
      $this->CategoryName = $CategoryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
      return $this->DomainName;
    }

    /**
     * @param string $DomainName
     * @return \PMG\BingAds\AdInsight\GetDomainCategoriesRequest
     */
    public function setDomainName($DomainName)
    {
      $this->DomainName = $DomainName;
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
     * @return \PMG\BingAds\AdInsight\GetDomainCategoriesRequest
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
