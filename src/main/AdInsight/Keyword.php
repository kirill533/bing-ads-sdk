<?php

namespace PMG\BingAds\AdInsight;

class Keyword
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @see \PMG\BingAds\AdInsight\MatchType for valid values
     *
     * @var string $MatchType
     */
    protected $MatchType = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\AdInsight\Keyword
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
     * @return \PMG\BingAds\AdInsight\Keyword
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
     * @return \PMG\BingAds\AdInsight\Keyword
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
