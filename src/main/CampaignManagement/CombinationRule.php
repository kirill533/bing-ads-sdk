<?php

namespace PMG\BingAds\CampaignManagement;

class CombinationRule
{

    /**
     * @var ArrayOflong $AudienceIds
     */
    protected $AudienceIds = null;

    /**
     * @var LogicalOperator $Operator
     */
    protected $Operator = null;

    /**
     * @param LogicalOperator $Operator
     */
    public function __construct($Operator = null)
    {
    $this->Operator = $Operator;
    }

    /**
     * @return ArrayOflong
     */
    public function getAudienceIds()
    {
        return $this->AudienceIds;
    }

    /**
     * @param ArrayOflong $AudienceIds
     * @return \PMG\BingAds\CampaignManagement\CombinationRule
     */
    public function setAudienceIds($AudienceIds)
    {
        $this->AudienceIds = $AudienceIds;
        return $this;
    }

    /**
     * @return LogicalOperator
     */
    public function getOperator()
    {
        return $this->Operator;
    }

    /**
     * @param LogicalOperator $Operator
     * @return \PMG\BingAds\CampaignManagement\CombinationRule
     */
    public function setOperator($Operator)
    {
        $this->Operator = $Operator;
        return $this;
    }

}
