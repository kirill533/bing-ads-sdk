<?php

namespace PMG\BingAds\CampaignMangagement;

class ProfileCriterion extends Criterion
{

    /**
     * @var int $ProfileId
     */
    protected $ProfileId = null;

    /**
     * @var ProfileType $ProfileType
     */
    protected $ProfileType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getProfileId()
    {
      return $this->ProfileId;
    }

    /**
     * @param int $ProfileId
     * @return \PMG\BingAds\CampaignMangagement\ProfileCriterion
     */
    public function setProfileId($ProfileId)
    {
      $this->ProfileId = $ProfileId;
      return $this;
    }

    /**
     * @return ProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param ProfileType $ProfileType
     * @return \PMG\BingAds\CampaignMangagement\ProfileCriterion
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
