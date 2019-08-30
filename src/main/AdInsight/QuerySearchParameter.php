<?php

namespace PMG\BingAds\AdInsight;

class QuerySearchParameter extends SearchParameter
{

    /**
     * @var ArrayOfstring $Queries
     */
    protected $Queries = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getQueries()
    {
        return $this->Queries;
    }

    /**
     * @param ArrayOfstring $Queries
     * @return \PMG\BingAds\AdInsight\QuerySearchParameter
     */
    public function setQueries($Queries)
    {
        $this->Queries = $Queries;
        return $this;
    }

}
