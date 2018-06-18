<?php

namespace PMG\BingAds\CampaignMangagement;

class NegativeKeyword extends SharedListItem
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var MatchType $MatchType
     */
    protected $MatchType = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @param MatchType $MatchType
     */
    public function __construct($MatchType)
    {
      parent::__construct();
      $this->MatchType = $MatchType;
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
     * @return \PMG\BingAds\CampaignMangagement\NegativeKeyword
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return MatchType
     */
    public function getMatchType()
    {
      return $this->MatchType;
    }

    /**
     * @param MatchType $MatchType
     * @return \PMG\BingAds\CampaignMangagement\NegativeKeyword
     */
    public function setMatchType($MatchType)
    {
      $this->MatchType = $MatchType;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \PMG\BingAds\CampaignMangagement\NegativeKeyword
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
