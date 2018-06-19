<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateKeywordsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOfKeyword $Keywords
     */
    protected $Keywords = null;

    /**
     * @var boolean $ReturnInheritedBidStrategyTypes
     */
    protected $ReturnInheritedBidStrategyTypes = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOfKeyword $Keywords
     * @param boolean $ReturnInheritedBidStrategyTypes
     */
    public function __construct($AdGroupId, $Keywords, $ReturnInheritedBidStrategyTypes)
    {
      $this->AdGroupId = $AdGroupId;
      $this->Keywords = $Keywords;
      $this->ReturnInheritedBidStrategyTypes = $ReturnInheritedBidStrategyTypes;
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
     * @return \PMG\BingAds\CampaignManagement\UpdateKeywordsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
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
     * @return \PMG\BingAds\CampaignManagement\UpdateKeywordsRequest
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnInheritedBidStrategyTypes()
    {
      return $this->ReturnInheritedBidStrategyTypes;
    }

    /**
     * @param boolean $ReturnInheritedBidStrategyTypes
     * @return \PMG\BingAds\CampaignManagement\UpdateKeywordsRequest
     */
    public function setReturnInheritedBidStrategyTypes($ReturnInheritedBidStrategyTypes)
    {
      $this->ReturnInheritedBidStrategyTypes = $ReturnInheritedBidStrategyTypes;
      return $this;
    }

}
