<?php

namespace PMG\BingAds\CustomerManagement;

class SearchUserInvitationsRequest
{

    /**
     * @var ArrayOfPredicate $Predicates
     */
    protected $Predicates = null;

    /**
     * @param ArrayOfPredicate $Predicates
     */
    public function __construct($Predicates = null)
    {
    $this->Predicates = $Predicates;
    }

    /**
     * @return ArrayOfPredicate
     */
    public function getPredicates()
    {
        return $this->Predicates;
    }

    /**
     * @param ArrayOfPredicate $Predicates
     * @return \PMG\BingAds\CustomerManagement\SearchUserInvitationsRequest
     */
    public function setPredicates($Predicates)
    {
        $this->Predicates = $Predicates;
        return $this;
    }

}
