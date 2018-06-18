<?php

namespace PMG\BingAds\CampaignMangagement;

class AudienceCriterion extends Criterion
{

    /**
     * @var int $AudienceId
     */
    protected $AudienceId = null;

    /**
     * @var AudienceType $AudienceType
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
     * @return \PMG\BingAds\CampaignMangagement\AudienceCriterion
     */
    public function setAudienceId($AudienceId)
    {
      $this->AudienceId = $AudienceId;
      return $this;
    }

    /**
     * @return AudienceType
     */
    public function getAudienceType()
    {
      return $this->AudienceType;
    }

    /**
     * @param AudienceType $AudienceType
     * @return \PMG\BingAds\CampaignMangagement\AudienceCriterion
     */
    public function setAudienceType($AudienceType)
    {
      $this->AudienceType = $AudienceType;
      return $this;
    }

}
