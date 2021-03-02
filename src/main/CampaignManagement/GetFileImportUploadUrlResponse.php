<?php

namespace PMG\BingAds\CampaignManagement;

class GetFileImportUploadUrlResponse
{

    /**
     * @var string $FileImportUploadUrl
     */
    protected $FileImportUploadUrl = null;

    /**
     * @param string $FileImportUploadUrl
     */
    public function __construct($FileImportUploadUrl = null)
    {
    $this->FileImportUploadUrl = $FileImportUploadUrl;
    }

    /**
     * @return string
     */
    public function getFileImportUploadUrl()
    {
        return $this->FileImportUploadUrl;
    }

    /**
     * @param string $FileImportUploadUrl
     * @return \PMG\BingAds\CampaignManagement\GetFileImportUploadUrlResponse
     */
    public function setFileImportUploadUrl($FileImportUploadUrl)
    {
        $this->FileImportUploadUrl = $FileImportUploadUrl;
        return $this;
    }

}
