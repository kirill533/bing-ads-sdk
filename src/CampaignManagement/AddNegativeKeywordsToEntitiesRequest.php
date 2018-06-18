<?php

namespace PMG\BingAds\CampaignMangagement;

class AddNegativeKeywordsToEntitiesRequest
{

    /**
     * @var ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     */
    protected $EntityNegativeKeywords = null;

    /**
     * @param ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     */
    public function __construct($EntityNegativeKeywords)
    {
      $this->EntityNegativeKeywords = $EntityNegativeKeywords;
    }

    /**
     * @return ArrayOfEntityNegativeKeyword
     */
    public function getEntityNegativeKeywords()
    {
      return $this->EntityNegativeKeywords;
    }

    /**
     * @param ArrayOfEntityNegativeKeyword $EntityNegativeKeywords
     * @return \PMG\BingAds\CampaignMangagement\AddNegativeKeywordsToEntitiesRequest
     */
    public function setEntityNegativeKeywords($EntityNegativeKeywords)
    {
      $this->EntityNegativeKeywords = $EntityNegativeKeywords;
      return $this;
    }

}
