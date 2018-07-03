<?php

namespace PMG\BingAds\CampaignManagement;

class ProductPartition extends Criterion
{

    /**
     * @var ProductCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var int $ParentCriterionId
     */
    protected $ParentCriterionId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ProductPartitionType for valid values
     *
     * @var string $PartitionType
     */
    protected $PartitionType = null;

    /**
     * @param string $PartitionType
     */
    public function __construct($PartitionType = null)
    {
      parent::__construct();
      $this->PartitionType = $PartitionType;
    }

    /**
     * @return ProductCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param ProductCondition $Condition
     * @return \PMG\BingAds\CampaignManagement\ProductPartition
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentCriterionId()
    {
      return $this->ParentCriterionId;
    }

    /**
     * @param int $ParentCriterionId
     * @return \PMG\BingAds\CampaignManagement\ProductPartition
     */
    public function setParentCriterionId($ParentCriterionId)
    {
      $this->ParentCriterionId = $ParentCriterionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartitionType()
    {
      return $this->PartitionType;
    }

    /**
     * @param string $PartitionType
     * @return \PMG\BingAds\CampaignManagement\ProductPartition
     */
    public function setPartitionType($PartitionType)
    {
      $this->PartitionType = $PartitionType;
      return $this;
    }

}
