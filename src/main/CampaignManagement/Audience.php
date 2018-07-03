<?php

namespace PMG\BingAds\CampaignManagement;

class Audience
{

    /**
     * @var int $AudienceNetworkSize
     */
    protected $AudienceNetworkSize = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $MembershipDuration
     */
    protected $MembershipDuration = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ParentId
     */
    protected $ParentId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\EntityScope for valid values
     *
     * @var string $Scope
     */
    protected $Scope = null;

    /**
     * @var int $SearchSize
     */
    protected $SearchSize = null;

    /**
     * @var ArrayOfstring $SupportedCampaignTypes
     */
    protected $SupportedCampaignTypes = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\AudienceType for valid values
     *
     * @var list $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAudienceNetworkSize()
    {
      return $this->AudienceNetworkSize;
    }

    /**
     * @param int $AudienceNetworkSize
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setAudienceNetworkSize($AudienceNetworkSize)
    {
      $this->AudienceNetworkSize = $AudienceNetworkSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
      return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
      $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getMembershipDuration()
    {
      return $this->MembershipDuration;
    }

    /**
     * @param int $MembershipDuration
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setMembershipDuration($MembershipDuration)
    {
      $this->MembershipDuration = $MembershipDuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
      return $this->ParentId;
    }

    /**
     * @param int $ParentId
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setParentId($ParentId)
    {
      $this->ParentId = $ParentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param string $Scope
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchSize()
    {
      return $this->SearchSize;
    }

    /**
     * @param int $SearchSize
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setSearchSize($SearchSize)
    {
      $this->SearchSize = $SearchSize;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSupportedCampaignTypes()
    {
      return $this->SupportedCampaignTypes;
    }

    /**
     * @param ArrayOfstring $SupportedCampaignTypes
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setSupportedCampaignTypes($SupportedCampaignTypes)
    {
      $this->SupportedCampaignTypes = $SupportedCampaignTypes;
      return $this;
    }

    /**
     * @return list
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param list $Type
     * @return \PMG\BingAds\CampaignManagement\Audience
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
