<?php

namespace PMG\BingAds\CampaignMangagement;

class CampaignCriterion
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var Criterion $Criterion
     */
    protected $Criterion = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var CampaignCriterionStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param int $CampaignId
     */
    public function __construct($CampaignId)
    {
      $this->CampaignId = $CampaignId;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\CampaignMangagement\CampaignCriterion
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
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
     * @return \PMG\BingAds\CampaignMangagement\CampaignCriterion
     */
    public function setCriterion($Criterion)
    {
      $this->Criterion = $Criterion;
      return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
      return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CampaignMangagement\CampaignCriterion
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
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
     * @return \PMG\BingAds\CampaignMangagement\CampaignCriterion
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return CampaignCriterionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param CampaignCriterionStatus $Status
     * @return \PMG\BingAds\CampaignMangagement\CampaignCriterion
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
     * @return \PMG\BingAds\CampaignMangagement\CampaignCriterion
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
