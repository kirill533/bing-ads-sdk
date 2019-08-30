<?php

namespace PMG\BingAds\AdInsight;

class SuggestKeywordsFromExistingKeywordsRequest
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
     * @var int $MaxSuggestionsPerKeyword
     */
    protected $MaxSuggestionsPerKeyword = null;

    /**
     * @var int $SuggestionType
     */
    protected $SuggestionType = null;

    /**
     * @var boolean $RemoveDuplicates
     */
    protected $RemoveDuplicates = null;

    /**
     * @var boolean $ExcludeBrand
     */
    protected $ExcludeBrand = null;

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @param ArrayOfstring $Keywords
     * @param string $Language
     * @param ArrayOfstring $PublisherCountries
     * @param int $MaxSuggestionsPerKeyword
     * @param int $SuggestionType
     * @param boolean $RemoveDuplicates
     * @param boolean $ExcludeBrand
     * @param int $AdGroupId
     * @param int $CampaignId
     */
    public function __construct($Keywords = null, $Language = null, $PublisherCountries = null, $MaxSuggestionsPerKeyword = null, $SuggestionType = null, $RemoveDuplicates = null, $ExcludeBrand = null, $AdGroupId = null, $CampaignId = null)
    {
    $this->Keywords = $Keywords;
    $this->Language = $Language;
    $this->PublisherCountries = $PublisherCountries;
    $this->MaxSuggestionsPerKeyword = $MaxSuggestionsPerKeyword;
    $this->SuggestionType = $SuggestionType;
    $this->RemoveDuplicates = $RemoveDuplicates;
    $this->ExcludeBrand = $ExcludeBrand;
    $this->AdGroupId = $AdGroupId;
    $this->CampaignId = $CampaignId;
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
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
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
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
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
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
     */
    public function setPublisherCountries($PublisherCountries)
    {
        $this->PublisherCountries = $PublisherCountries;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSuggestionsPerKeyword()
    {
        return $this->MaxSuggestionsPerKeyword;
    }

    /**
     * @param int $MaxSuggestionsPerKeyword
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
     */
    public function setMaxSuggestionsPerKeyword($MaxSuggestionsPerKeyword)
    {
        $this->MaxSuggestionsPerKeyword = $MaxSuggestionsPerKeyword;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuggestionType()
    {
        return $this->SuggestionType;
    }

    /**
     * @param int $SuggestionType
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
     */
    public function setSuggestionType($SuggestionType)
    {
        $this->SuggestionType = $SuggestionType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveDuplicates()
    {
        return $this->RemoveDuplicates;
    }

    /**
     * @param boolean $RemoveDuplicates
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
     */
    public function setRemoveDuplicates($RemoveDuplicates)
    {
        $this->RemoveDuplicates = $RemoveDuplicates;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeBrand()
    {
        return $this->ExcludeBrand;
    }

    /**
     * @param boolean $ExcludeBrand
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
     */
    public function setExcludeBrand($ExcludeBrand)
    {
        $this->ExcludeBrand = $ExcludeBrand;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\AdInsight\SuggestKeywordsFromExistingKeywordsRequest
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

}
