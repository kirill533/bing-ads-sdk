<?php

namespace PMG\BingAds\AdInsight;

class LanguageCriterion extends Criterion
{

    /**
     * @var string $Language
     */
    protected $Language = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\AdInsight\LanguageCriterion
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

}
