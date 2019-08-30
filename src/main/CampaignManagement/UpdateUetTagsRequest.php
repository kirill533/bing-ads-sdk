<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateUetTagsRequest
{

    /**
     * @var ArrayOfUetTag $UetTags
     */
    protected $UetTags = null;

    /**
     * @param ArrayOfUetTag $UetTags
     */
    public function __construct($UetTags = null)
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
     * @return \PMG\BingAds\CampaignManagement\UpdateUetTagsRequest
     */
    public function setUetTags($UetTags)
    {
        $this->UetTags = $UetTags;
        return $this;
    }

}
