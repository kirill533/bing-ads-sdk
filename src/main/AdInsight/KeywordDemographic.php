<?php

namespace PMG\BingAds\AdInsight;

class KeywordDemographic
{

    /**
     * @var string $Device
     */
    protected $Device = null;

    /**
     * @var float $EighteenToTwentyFour
     */
    protected $EighteenToTwentyFour = null;

    /**
     * @var float $TwentyFiveToThirtyFour
     */
    protected $TwentyFiveToThirtyFour = null;

    /**
     * @var float $ThirtyFiveToFourtyNine
     */
    protected $ThirtyFiveToFourtyNine = null;

    /**
     * @var float $FiftyToSixtyFour
     */
    protected $FiftyToSixtyFour = null;

    /**
     * @var float $SixtyFiveAndAbove
     */
    protected $SixtyFiveAndAbove = null;

    /**
     * @var float $AgeUnknown
     */
    protected $AgeUnknown = null;

    /**
     * @var float $Female
     */
    protected $Female = null;

    /**
     * @var float $Male
     */
    protected $Male = null;

    /**
     * @var float $GenderUnknown
     */
    protected $GenderUnknown = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param string $Device
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setDevice($Device)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return float
     */
    public function getEighteenToTwentyFour()
    {
        return $this->EighteenToTwentyFour;
    }

    /**
     * @param float $EighteenToTwentyFour
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setEighteenToTwentyFour($EighteenToTwentyFour)
    {
        $this->EighteenToTwentyFour = $EighteenToTwentyFour;
        return $this;
    }

    /**
     * @return float
     */
    public function getTwentyFiveToThirtyFour()
    {
        return $this->TwentyFiveToThirtyFour;
    }

    /**
     * @param float $TwentyFiveToThirtyFour
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setTwentyFiveToThirtyFour($TwentyFiveToThirtyFour)
    {
        $this->TwentyFiveToThirtyFour = $TwentyFiveToThirtyFour;
        return $this;
    }

    /**
     * @return float
     */
    public function getThirtyFiveToFourtyNine()
    {
        return $this->ThirtyFiveToFourtyNine;
    }

    /**
     * @param float $ThirtyFiveToFourtyNine
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setThirtyFiveToFourtyNine($ThirtyFiveToFourtyNine)
    {
        $this->ThirtyFiveToFourtyNine = $ThirtyFiveToFourtyNine;
        return $this;
    }

    /**
     * @return float
     */
    public function getFiftyToSixtyFour()
    {
        return $this->FiftyToSixtyFour;
    }

    /**
     * @param float $FiftyToSixtyFour
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setFiftyToSixtyFour($FiftyToSixtyFour)
    {
        $this->FiftyToSixtyFour = $FiftyToSixtyFour;
        return $this;
    }

    /**
     * @return float
     */
    public function getSixtyFiveAndAbove()
    {
        return $this->SixtyFiveAndAbove;
    }

    /**
     * @param float $SixtyFiveAndAbove
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setSixtyFiveAndAbove($SixtyFiveAndAbove)
    {
        $this->SixtyFiveAndAbove = $SixtyFiveAndAbove;
        return $this;
    }

    /**
     * @return float
     */
    public function getAgeUnknown()
    {
        return $this->AgeUnknown;
    }

    /**
     * @param float $AgeUnknown
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setAgeUnknown($AgeUnknown)
    {
        $this->AgeUnknown = $AgeUnknown;
        return $this;
    }

    /**
     * @return float
     */
    public function getFemale()
    {
        return $this->Female;
    }

    /**
     * @param float $Female
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setFemale($Female)
    {
        $this->Female = $Female;
        return $this;
    }

    /**
     * @return float
     */
    public function getMale()
    {
        return $this->Male;
    }

    /**
     * @param float $Male
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setMale($Male)
    {
        $this->Male = $Male;
        return $this;
    }

    /**
     * @return float
     */
    public function getGenderUnknown()
    {
        return $this->GenderUnknown;
    }

    /**
     * @param float $GenderUnknown
     * @return \PMG\BingAds\AdInsight\KeywordDemographic
     */
    public function setGenderUnknown($GenderUnknown)
    {
        $this->GenderUnknown = $GenderUnknown;
        return $this;
    }

}
