<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteLabelsRequest
{

    /**
     * @var ArrayOflong $LabelIds
     */
    protected $LabelIds = null;

    /**
     * @param ArrayOflong $LabelIds
     */
    public function __construct($LabelIds = null)
    {
    $this->LabelIds = $LabelIds;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteLabelsRequest
     */
    public function setLabelIds($LabelIds)
    {
        $this->LabelIds = $LabelIds;
        return $this;
    }

}
