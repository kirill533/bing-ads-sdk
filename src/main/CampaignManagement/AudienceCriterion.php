<?php

namespace PMG\BingAds\CampaignManagement;

class AudienceCriterion extends Criterion
{

    /**
     * @var int $AudienceId
     */
    protected $AudienceId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AudienceType for valid values
     *
     * @var list $AudienceType
     */
    protected $AudienceType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getAudienceId()
    {
      return $this->AudienceId;
    }

    /**
     * @param int $AudienceId
     * @return \PMG\BingAds\CampaignManagement\AudienceCriterion
     */
    public function setAudienceId($AudienceId)
    {
      $this->AudienceId = $AudienceId;
      return $this;
    }

    /**
     * @return list
     */
    public function getAudienceType()
    {
      return $this->AudienceType;
    }

    /**
     * @param list $AudienceType
     * @return \PMG\BingAds\CampaignManagement\AudienceCriterion
     */
    public function setAudienceType($AudienceType)
    {
      $this->AudienceType = $AudienceType;
      return $this;
    }

}
