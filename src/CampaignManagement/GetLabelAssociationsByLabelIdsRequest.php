<?php

namespace PMG\BingAds\CampaignMangagement;

class GetLabelAssociationsByLabelIdsRequest
{

    /**
     * @var EntityType $EntityType
     */
    protected $EntityType = null;

    /**
     * @var ArrayOflong $LabelIds
     */
    protected $LabelIds = null;

    /**
     * @var Paging $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param EntityType $EntityType
     * @param ArrayOflong $LabelIds
     * @param Paging $PageInfo
     */
    public function __construct($EntityType, $LabelIds, $PageInfo)
    {
      $this->EntityType = $EntityType;
      $this->LabelIds = $LabelIds;
      $this->PageInfo = $PageInfo;
    }

    /**
     * @return EntityType
     */
    public function getEntityType()
    {
      return $this->EntityType;
    }

    /**
     * @param EntityType $EntityType
     * @return \PMG\BingAds\CampaignMangagement\GetLabelAssociationsByLabelIdsRequest
     */
    public function setEntityType($EntityType)
    {
      $this->EntityType = $EntityType;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getLabelIds()
    {
      return $this->LabelIds;
    }

    /**
     * @param ArrayOflong $LabelIds
     * @return \PMG\BingAds\CampaignMangagement\GetLabelAssociationsByLabelIdsRequest
     */
    public function setLabelIds($LabelIds)
    {
      $this->LabelIds = $LabelIds;
      return $this;
    }

    /**
     * @return Paging
     */
    public function getPageInfo()
    {
      return $this->PageInfo;
    }

    /**
     * @param Paging $PageInfo
     * @return \PMG\BingAds\CampaignMangagement\GetLabelAssociationsByLabelIdsRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
