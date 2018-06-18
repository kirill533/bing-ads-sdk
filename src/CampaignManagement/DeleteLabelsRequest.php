<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteLabelsRequest
{

    /**
     * @var ArrayOflong $LabelIds
     */
    protected $LabelIds = null;

    /**
     * @param ArrayOflong $LabelIds
     */
    public function __construct($LabelIds)
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteLabelsRequest
     */
    public function setLabelIds($LabelIds)
    {
      $this->LabelIds = $LabelIds;
      return $this;
    }

}
