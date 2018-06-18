<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @var ProductPartitionType $PartitionType
     */
    protected $PartitionType = null;

    /**
     * @param ProductPartitionType $PartitionType
     */
    public function __construct($PartitionType)
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
     * @return \PMG\BingAds\CampaignMangagement\ProductPartition
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
     * @return \PMG\BingAds\CampaignMangagement\ProductPartition
     */
    public function setParentCriterionId($ParentCriterionId)
    {
      $this->ParentCriterionId = $ParentCriterionId;
      return $this;
    }

    /**
     * @return ProductPartitionType
     */
    public function getPartitionType()
    {
      return $this->PartitionType;
    }

    /**
     * @param ProductPartitionType $PartitionType
     * @return \PMG\BingAds\CampaignMangagement\ProductPartition
     */
    public function setPartitionType($PartitionType)
    {
      $this->PartitionType = $PartitionType;
      return $this;
    }

}
