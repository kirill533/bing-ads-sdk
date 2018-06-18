<?php

namespace PMG\BingAds\CampaignMangagement;

class AdGroupCriterion
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var Criterion $Criterion
     */
    protected $Criterion = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var AdGroupCriterionStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroupCriterion
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

    /**
     * @return Criterion
     */
    public function getCriterion()
    {
      return $this->Criterion;
    }

    /**
     * @param Criterion $Criterion
     * @return \PMG\BingAds\CampaignMangagement\AdGroupCriterion
     */
    public function setCriterion($Criterion)
    {
      $this->Criterion = $Criterion;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignMangagement\AdGroupCriterion
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return AdGroupCriterionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param AdGroupCriterionStatus $Status
     * @return \PMG\BingAds\CampaignMangagement\AdGroupCriterion
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignMangagement\AdGroupCriterion
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
