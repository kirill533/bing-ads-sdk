<?php

namespace PMG\BingAds\CampaignManagement;

class IdCollection
{

    /**
     * @var ArrayOfNullableOflong $Ids
     */
    protected $Ids = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * @param ArrayOfNullableOflong $Ids
     * @return \PMG\BingAds\CampaignManagement\IdCollection
     */
    public function setIds($Ids)
    {
        $this->Ids = $Ids;
        return $this;
    }

}
