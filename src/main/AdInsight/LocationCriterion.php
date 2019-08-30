<?php

namespace PMG\BingAds\AdInsight;

class LocationCriterion extends Criterion
{

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param int $LocationId
     * @return \PMG\BingAds\AdInsight\LocationCriterion
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

}
