<?php

namespace PMG\BingAds\CampaignManagement;

class MediaRepresentation
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CampaignManagement\MediaRepresentation
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\MediaRepresentation
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return \PMG\BingAds\CampaignManagement\MediaRepresentation
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
        return $this;
    }

}
