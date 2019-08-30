<?php

namespace PMG\BingAds\CampaignManagement;

class SharedList extends SharedEntity
{

    /**
     * @var int $ItemCount
     */
    protected $ItemCount = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }

    /**
     * @param int $ItemCount
     * @return \PMG\BingAds\CampaignManagement\SharedList
     */
    public function setItemCount($ItemCount)
    {
        $this->ItemCount = $ItemCount;
        return $this;
    }

}
