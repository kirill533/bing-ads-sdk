<?php

namespace PMG\BingAds\CampaignManagement;

class NegativeKeyword extends SharedListItem
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\MatchType for valid values
     *
     * @var string $MatchType
     */
    protected $MatchType = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @param string $MatchType
     */
    public function __construct($MatchType = null)
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
     * @return \PMG\BingAds\CampaignManagement\NegativeKeyword
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
      return $this->MatchType;
    }

    /**
     * @param string $MatchType
     * @return \PMG\BingAds\CampaignManagement\NegativeKeyword
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
     * @return \PMG\BingAds\CampaignManagement\NegativeKeyword
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
