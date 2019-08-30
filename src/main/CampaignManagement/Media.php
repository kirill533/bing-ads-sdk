<?php

namespace PMG\BingAds\CampaignManagement;

class Media
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $MediaType
     */
    protected $MediaType = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CampaignManagement\Media
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
        return $this->MediaType;
    }

    /**
     * @param string $MediaType
     * @return \PMG\BingAds\CampaignManagement\Media
     */
    public function setMediaType($MediaType)
    {
        $this->MediaType = $MediaType;
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
     * @return \PMG\BingAds\CampaignManagement\Media
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
