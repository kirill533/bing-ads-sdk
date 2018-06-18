<?php

namespace PMG\BingAds\CampaignMangagement;

class ProductAudience extends Audience
{

    /**
     * @var ProductAudienceType $ProductAudienceType
     */
    protected $ProductAudienceType = null;

    /**
     * @var int $TagId
     */
    protected $TagId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ProductAudienceType
     */
    public function getProductAudienceType()
    {
      return $this->ProductAudienceType;
    }

    /**
     * @param ProductAudienceType $ProductAudienceType
     * @return \PMG\BingAds\CampaignMangagement\ProductAudience
     */
    public function setProductAudienceType($ProductAudienceType)
    {
      $this->ProductAudienceType = $ProductAudienceType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTagId()
    {
      return $this->TagId;
    }

    /**
     * @param int $TagId
     * @return \PMG\BingAds\CampaignMangagement\ProductAudience
     */
    public function setTagId($TagId)
    {
      $this->TagId = $TagId;
      return $this;
    }

}
