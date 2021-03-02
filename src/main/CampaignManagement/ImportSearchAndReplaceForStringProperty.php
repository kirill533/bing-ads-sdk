<?php

namespace PMG\BingAds\CampaignManagement;

class ImportSearchAndReplaceForStringProperty
{

    /**
     * @var string $ReplaceString
     */
    protected $ReplaceString = null;

    /**
     * @var string $SearchString
     */
    protected $SearchString = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReplaceString()
    {
        return $this->ReplaceString;
    }

    /**
     * @param string $ReplaceString
     * @return \PMG\BingAds\CampaignManagement\ImportSearchAndReplaceForStringProperty
     */
    public function setReplaceString($ReplaceString)
    {
        $this->ReplaceString = $ReplaceString;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchString()
    {
        return $this->SearchString;
    }

    /**
     * @param string $SearchString
     * @return \PMG\BingAds\CampaignManagement\ImportSearchAndReplaceForStringProperty
     */
    public function setSearchString($SearchString)
    {
        $this->SearchString = $SearchString;
        return $this;
    }

}
