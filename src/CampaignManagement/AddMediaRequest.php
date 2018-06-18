<?php

namespace PMG\BingAds\CampaignMangagement;

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
    public function __construct($AccountId, $Media)
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
     * @return \PMG\BingAds\CampaignMangagement\AddMediaRequest
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
     * @return \PMG\BingAds\CampaignMangagement\AddMediaRequest
     */
    public function setMedia($Media)
    {
      $this->Media = $Media;
      return $this;
    }

}
