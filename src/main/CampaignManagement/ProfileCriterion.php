<?php

namespace PMG\BingAds\CampaignManagement;

class ProfileCriterion extends Criterion
{

    /**
     * @var int $ProfileId
     */
    protected $ProfileId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ProfileType for valid values
     *
     * @var list $ProfileType
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
     * @return \PMG\BingAds\CampaignManagement\ProfileCriterion
     */
    public function setProfileId($ProfileId)
    {
      $this->ProfileId = $ProfileId;
      return $this;
    }

    /**
     * @return list
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param list $ProfileType
     * @return \PMG\BingAds\CampaignManagement\ProfileCriterion
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
