<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordCategoriesRequest
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
     * @var int $MaxCategories
     */
    protected $MaxCategories = null;

    /**
     * @param ArrayOfstring $Keywords
     * @param string $Language
     * @param string $PublisherCountry
     * @param int $MaxCategories
     */
    public function __construct($Keywords, $Language, $PublisherCountry, $MaxCategories)
    {
      $this->Keywords = $Keywords;
      $this->Language = $Language;
      $this->PublisherCountry = $PublisherCountry;
      $this->MaxCategories = $MaxCategories;
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
     * @return \PMG\BingAds\AdInsight\GetKeywordCategoriesRequest
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
     * @return \PMG\BingAds\AdInsight\GetKeywordCategoriesRequest
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
     * @return \PMG\BingAds\AdInsight\GetKeywordCategoriesRequest
     */
    public function setPublisherCountry($PublisherCountry)
    {
      $this->PublisherCountry = $PublisherCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCategories()
    {
      return $this->MaxCategories;
    }

    /**
     * @param int $MaxCategories
     * @return \PMG\BingAds\AdInsight\GetKeywordCategoriesRequest
     */
    public function setMaxCategories($MaxCategories)
    {
      $this->MaxCategories = $MaxCategories;
      return $this;
    }

}
