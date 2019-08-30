<?php

namespace PMG\BingAds\CampaignManagement;

class GetLabelsByIdsRequest
{

    /**
     * @var ArrayOflong $LabelIds
     */
    protected $LabelIds = null;

    /**
     * @var Paging $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param ArrayOflong $LabelIds
     * @param Paging $PageInfo
     */
    public function __construct($LabelIds = null, $PageInfo = null)
    {
    $this->LabelIds = $LabelIds;
    $this->PageInfo = $PageInfo;
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
     * @return \PMG\BingAds\CampaignManagement\GetLabelsByIdsRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetLabelsByIdsRequest
     */
    public function setPageInfo($PageInfo)
    {
        $this->PageInfo = $PageInfo;
        return $this;
    }

}
