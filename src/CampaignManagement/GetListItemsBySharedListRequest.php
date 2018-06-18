<?php

namespace PMG\BingAds\CampaignMangagement;

class GetListItemsBySharedListRequest
{

    /**
     * @var SharedList $SharedList
     */
    protected $SharedList = null;

    /**
     * @param SharedList $SharedList
     */
    public function __construct($SharedList)
    {
      $this->SharedList = $SharedList;
    }

    /**
     * @return SharedList
     */
    public function getSharedList()
    {
      return $this->SharedList;
    }

    /**
     * @param SharedList $SharedList
     * @return \PMG\BingAds\CampaignMangagement\GetListItemsBySharedListRequest
     */
    public function setSharedList($SharedList)
    {
      $this->SharedList = $SharedList;
      return $this;
    }

}
