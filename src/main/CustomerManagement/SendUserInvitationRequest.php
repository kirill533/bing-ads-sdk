<?php

namespace PMG\BingAds\CustomerManagement;

class SendUserInvitationRequest
{

    /**
     * @var UserInvitation $UserInvitation
     */
    protected $UserInvitation = null;

    /**
     * @param UserInvitation $UserInvitation
     */
    public function __construct($UserInvitation = null)
    {
      $this->UserInvitation = $UserInvitation;
    }

    /**
     * @return UserInvitation
     */
    public function getUserInvitation()
    {
      return $this->UserInvitation;
    }

    /**
     * @param UserInvitation $UserInvitation
     * @return \PMG\BingAds\CustomerManagement\SendUserInvitationRequest
     */
    public function setUserInvitation($UserInvitation)
    {
      $this->UserInvitation = $UserInvitation;
      return $this;
    }

}
