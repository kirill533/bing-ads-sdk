<?php

namespace PMG\BingAds\AdInsight;

class LanguageSearchParameter extends SearchParameter
{

    /**
     * @var ArrayOfLanguageCriterion $Languages
     */
    protected $Languages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfLanguageCriterion
     */
    public function getLanguages()
    {
      return $this->Languages;
    }

    /**
     * @param ArrayOfLanguageCriterion $Languages
     * @return \PMG\BingAds\AdInsight\LanguageSearchParameter
     */
    public function setLanguages($Languages)
    {
      $this->Languages = $Languages;
      return $this;
    }

}
