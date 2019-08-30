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
        $this->LastModifiedTime = null === $LastModifiedTime ? null : $LastModifiedTime->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        if (null === $this->LastModifiedTime) {
            return $this->LastModifiedTime;
        }
        try {
            return new \DateTime($this->LastModifiedTime);
        } catch(\Exception $e) {
            return null;
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
