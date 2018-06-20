<?php

namespace PMG\BingAds\CustomerManagement;

class SendUserInvitationResponse
{

    /**
     * @var int $UserInvitationId
     */
    protected $UserInvitationId = null;

    /**
     * @param int $UserInvitationId
     */
    public function __construct($UserInvitationId = null)
    {
      $this->UserInvitationId = $UserInvitationId;
    }

    /**
     * @return int
     */
    public function getUserInvitationId()
    {
      return $this->UserInvitationId;
    }

    /**
     * @param int $UserInvitationId
     * @return \PMG\BingAds\CustomerManagement\SendUserInvitationResponse
     */
    public function setUserInvitationId($UserInvitationId)
    {
      $this->UserInvitationId = $UserInvitationId;
      return $this;
    }

}
