<?php

namespace PMG\BingAds\AdInsight;

class NegativeKeyword
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
     * @return \PMG\BingAds\AdInsight\NegativeKeyword
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
     * @return \PMG\BingAds\AdInsight\NegativeKeyword
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
     * @return \PMG\BingAds\AdInsight\NegativeKeyword
     */
    public function setText($Text)
    {
        $this->Text = $Text;
        return $this;
    }

}
