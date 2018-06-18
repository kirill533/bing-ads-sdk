<?php

namespace PMG\BingAds\CampaignMangagement;

class GetKeywordsByEditorialStatusResponse
{

    /**
     * @var ArrayOfKeyword $Keywords
     */
    protected $Keywords = null;

    /**
     * @param ArrayOfKeyword $Keywords
     */
    public function __construct($Keywords)
    {
      $this->Keywords = $Keywords;
    }

    /**
     * @return ArrayOfKeyword
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfKeyword $Keywords
     * @return \PMG\BingAds\CampaignMangagement\GetKeywordsByEditorialStatusResponse
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

}
