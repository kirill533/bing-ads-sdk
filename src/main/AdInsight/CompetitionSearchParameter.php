<?php

namespace PMG\BingAds\AdInsight;

class CompetitionSearchParameter extends SearchParameter
{

    /**
     * @var ArrayOfCompetitionLevel $CompetitionLevels
     */
    protected $CompetitionLevels = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCompetitionLevel
     */
    public function getCompetitionLevels()
    {
        return $this->CompetitionLevels;
    }

    /**
     * @param ArrayOfCompetitionLevel $CompetitionLevels
     * @return \PMG\BingAds\AdInsight\CompetitionSearchParameter
     */
    public function setCompetitionLevels($CompetitionLevels)
    {
        $this->CompetitionLevels = $CompetitionLevels;
        return $this;
    }

}
