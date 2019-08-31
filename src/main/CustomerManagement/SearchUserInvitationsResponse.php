<?php

namespace PMG\BingAds\CustomerManagement;

class SearchUserInvitationsResponse
{

    /**
     * @var ArrayOfUserInvitation $UserInvitations
     */
    protected $UserInvitations = null;

    /**
     * @param ArrayOfUserInvitation $UserInvitations
     */
    public function __construct($UserInvitations = null)
    {
    $this->UserInvitations = $UserInvitations;
    }

    /**
     * @return ArrayOfUserInvitation
     */
    public function getUserInvitations()
    {
        return $this->UserInvitations;
    }

    /**
     * @param ArrayOfUserInvitation $UserInvitations
     * @return \PMG\BingAds\CustomerManagement\SearchUserInvitationsResponse
     */
    public function setUserInvitations($UserInvitations)
    {
        $this->UserInvitations = $UserInvitations;
        return $this;
    }

}
