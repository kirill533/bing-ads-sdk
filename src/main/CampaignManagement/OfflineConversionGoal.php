<?php

namespace PMG\BingAds\CampaignManagement;

class OfflineConversionGoal extends ConversionGoal
{

    /**
     * @var boolean $IsExternallyAttributed
     */
    protected $IsExternallyAttributed = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getIsExternallyAttributed()
    {
        return $this->IsExternallyAttributed;
    }

    /**
     * @param boolean $IsExternallyAttributed
     * @return \PMG\BingAds\CampaignManagement\OfflineConversionGoal
     */
    public function setIsExternallyAttributed($IsExternallyAttributed)
    {
        $this->IsExternallyAttributed = $IsExternallyAttributed;
        return $this;
    }

}
