<?php

namespace PMG\BingAds\CustomerManagement;

class UpdateUserRolesResponse
{

    /**
     * @var \DateTime $LastModifiedTime
     */
    protected $LastModifiedTime = null;

    /**
     * @param \DateTime $LastModifiedTime
     */
    public function __construct(\DateTime $LastModifiedTime = null)
    {
      $this->LastModifiedTime = $LastModifiedTime ? $LastModifiedTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
      if ($this->LastModifiedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedTime
     * @return \PMG\BingAds\CustomerManagement\UpdateUserRolesResponse
     */
    public function setLastModifiedTime(\DateTime $LastModifiedTime)
    {
      $this->LastModifiedTime = $LastModifiedTime->format(\DateTime::ATOM);
      return $this;
    }

}
