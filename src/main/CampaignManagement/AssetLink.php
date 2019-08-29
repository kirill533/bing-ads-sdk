<?php

namespace PMG\BingAds\CampaignManagement;

class AssetLink
{

    /**
     * @var Asset $Asset
     */
    protected $Asset = null;

    /**
     * @var string $AssetPerformanceLabel
     */
    protected $AssetPerformanceLabel = null;

    /**
     * @var AssetLinkEditorialStatus $EditorialStatus
     */
    protected $EditorialStatus = null;

    /**
     * @var string $PinnedField
     */
    protected $PinnedField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Asset
     */
    public function getAsset()
    {
      return $this->Asset;
    }

    /**
     * @param Asset $Asset
     * @return \PMG\BingAds\CampaignManagement\AssetLink
     */
    public function setAsset($Asset)
    {
      $this->Asset = $Asset;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssetPerformanceLabel()
    {
      return $this->AssetPerformanceLabel;
    }

    /**
     * @param string $AssetPerformanceLabel
     * @return \PMG\BingAds\CampaignManagement\AssetLink
     */
    public function setAssetPerformanceLabel($AssetPerformanceLabel)
    {
      $this->AssetPerformanceLabel = $AssetPerformanceLabel;
      return $this;
    }

    /**
     * @return AssetLinkEditorialStatus
     */
    public function getEditorialStatus()
    {
      return $this->EditorialStatus;
    }

    /**
     * @param AssetLinkEditorialStatus $EditorialStatus
     * @return \PMG\BingAds\CampaignManagement\AssetLink
     */
    public function setEditorialStatus($EditorialStatus)
    {
      $this->EditorialStatus = $EditorialStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPinnedField()
    {
      return $this->PinnedField;
    }

    /**
     * @param string $PinnedField
     * @return \PMG\BingAds\CampaignManagement\AssetLink
     */
    public function setPinnedField($PinnedField)
    {
      $this->PinnedField = $PinnedField;
      return $this;
    }

}
