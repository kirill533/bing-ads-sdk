<?php

namespace PMG\BingAds\CampaignManagement;

class GetKeywordsByEditorialStatusResponse
{

    /**
     * @var ArrayOfKeyword $Keywords
     */
    protected $Keywords = null;

    /**
     * @param ArrayOfKeyword $Keywords
     */
    public function __construct($Keywords = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetKeywordsByEditorialStatusResponse
     */
    public function setKeywords($Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }

}
