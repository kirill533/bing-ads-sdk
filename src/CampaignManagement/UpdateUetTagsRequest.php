<?php

namespace PMG\BingAds\CampaignMangagement;

class UpdateUetTagsRequest
{

    /**
     * @var ArrayOfUetTag $UetTags
     */
    protected $UetTags = null;

    /**
     * @param ArrayOfUetTag $UetTags
     */
    public function __construct($UetTags)
    {
      $this->UetTags = $UetTags;
    }

    /**
     * @return ArrayOfUetTag
     */
    public function getUetTags()
    {
      return $this->UetTags;
    }

    /**
     * @param ArrayOfUetTag $UetTags
     * @return \PMG\BingAds\CampaignMangagement\UpdateUetTagsRequest
     */
    public function setUetTags($UetTags)
    {
      $this->UetTags = $UetTags;
      return $this;
    }

}
