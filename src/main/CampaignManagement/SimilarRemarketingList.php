<?php

namespace PMG\BingAds\CampaignManagement;

class SimilarRemarketingList extends Audience
{

    /**
     * @var int $SourceId
     */
    protected $SourceId = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }

    /**
     * @param int $SourceId
     * @return \PMG\BingAds\CampaignManagement\SimilarRemarketingList
     */
    public function setSourceId($SourceId)
    {
        $this->SourceId = $SourceId;
        return $this;
    }

}
