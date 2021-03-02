<?php

namespace PMG\BingAds\CampaignManagement;

class NegativeSite extends SharedListItem
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    
    public function __construct()
    {
        parent::__construct();
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
     * @return \PMG\BingAds\CampaignManagement\NegativeSite
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \PMG\BingAds\CampaignManagement\NegativeSite
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
        return $this;
    }

}
