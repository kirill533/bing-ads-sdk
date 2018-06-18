<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @return \PMG\BingAds\CampaignMangagement\SharedList
     */
    public function setItemCount($ItemCount)
    {
      $this->ItemCount = $ItemCount;
      return $this;
    }

}
