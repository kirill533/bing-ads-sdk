<?php

namespace PMG\BingAds\CampaignManagement;

class GetBMCStoresByCustomerIdResponse
{

    /**
     * @var ArrayOfBMCStore $BMCStores
     */
    protected $BMCStores = null;

    /**
     * @param ArrayOfBMCStore $BMCStores
     */
    public function __construct($BMCStores)
    {
      $this->BMCStores = $BMCStores;
    }

    /**
     * @return ArrayOfBMCStore
     */
    public function getBMCStores()
    {
      return $this->BMCStores;
    }

    /**
     * @param ArrayOfBMCStore $BMCStores
     * @return \PMG\BingAds\CampaignManagement\GetBMCStoresByCustomerIdResponse
     */
    public function setBMCStores($BMCStores)
    {
      $this->BMCStores = $BMCStores;
      return $this;
    }

}
