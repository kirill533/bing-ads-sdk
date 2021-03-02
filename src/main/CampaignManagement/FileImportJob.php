<?php

namespace PMG\BingAds\CampaignManagement;

class FileImportJob extends ImportJob
{

    /**
     * @var string $FileSource
     */
    protected $FileSource = null;

    /**
     * @var string $FileUrl
     */
    protected $FileUrl = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getFileSource()
    {
        return $this->FileSource;
    }

    /**
     * @param string $FileSource
     * @return \PMG\BingAds\CampaignManagement\FileImportJob
     */
    public function setFileSource($FileSource)
    {
        $this->FileSource = $FileSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileUrl()
    {
        return $this->FileUrl;
    }

    /**
     * @param string $FileUrl
     * @return \PMG\BingAds\CampaignManagement\FileImportJob
     */
    public function setFileUrl($FileUrl)
    {
        $this->FileUrl = $FileUrl;
        return $this;
    }

}
