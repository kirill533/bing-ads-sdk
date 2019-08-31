<?php

namespace PMG\BingAds\CampaignManagement;

class AddMediaRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfMedia $Media
     */
    protected $Media = null;

    /**
     * @param int $AccountId
     * @param ArrayOfMedia $Media
     */
    public function __construct($AccountId = null, $Media = null)
    {
    $this->AccountId = $AccountId;
    $this->Media = $Media;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\AddMediaRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return ArrayOfMedia
     */
    public function getMedia()
    {
        return $this->Media;
    }

    /**
     * @param ArrayOfMedia $Media
     * @return \PMG\BingAds\CampaignManagement\AddMediaRequest
     */
    public function setMedia($Media)
    {
        $this->Media = $Media;
        return $this;
    }

}
