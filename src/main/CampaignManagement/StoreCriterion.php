<?php

namespace PMG\BingAds\CampaignManagement;

class StoreCriterion extends Criterion
{

    /**
     * @var int $StoreId
     */
    protected $StoreId = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }

    /**
     * @param int $StoreId
     * @return \PMG\BingAds\CampaignManagement\StoreCriterion
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

}
