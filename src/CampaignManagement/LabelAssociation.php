<?php

namespace PMG\BingAds\CampaignMangagement;

class LabelAssociation
{

    /**
     * @var int $EntityId
     */
    protected $EntityId = null;

    /**
     * @var int $LabelId
     */
    protected $LabelId = null;

    /**
     * @param int $EntityId
     * @param int $LabelId
     */
    public function __construct($EntityId, $LabelId)
    {
      $this->EntityId = $EntityId;
      $this->LabelId = $LabelId;
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
      return $this->EntityId;
    }

    /**
     * @param int $EntityId
     * @return \PMG\BingAds\CampaignMangagement\LabelAssociation
     */
    public function setEntityId($EntityId)
    {
      $this->EntityId = $EntityId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelId()
    {
      return $this->LabelId;
    }

    /**
     * @param int $LabelId
     * @return \PMG\BingAds\CampaignMangagement\LabelAssociation
     */
    public function setLabelId($LabelId)
    {
      $this->LabelId = $LabelId;
      return $this;
    }

}
