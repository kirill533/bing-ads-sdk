<?php

namespace PMG\BingAds\CampaignManagement;

class GetGeoLocationsFileUrlResponse
{

    /**
     * @var string $FileUrl
     */
    protected $FileUrl = null;

    /**
     * @var \DateTime $FileUrlExpiryTimeUtc
     */
    protected $FileUrlExpiryTimeUtc = null;

    /**
     * @var \DateTime $LastModifiedTimeUtc
     */
    protected $LastModifiedTimeUtc = null;

    /**
     * @param string $FileUrl
     * @param \DateTime $FileUrlExpiryTimeUtc
     * @param \DateTime $LastModifiedTimeUtc
     */
    public function __construct($FileUrl = null, \DateTime $FileUrlExpiryTimeUtc = null, \DateTime $LastModifiedTimeUtc = null)
    {
    $this->FileUrl = $FileUrl;
        $this->FileUrlExpiryTimeUtc = null === $FileUrlExpiryTimeUtc ? null : $FileUrlExpiryTimeUtc->format(\DateTime::ATOM);
        $this->LastModifiedTimeUtc = null === $LastModifiedTimeUtc ? null : $LastModifiedTimeUtc->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getFileUrl()
    {
        return $this->FileUrl;
    }

    /**
     * @param string $FileUrl
     * @return \PMG\BingAds\CampaignManagement\GetGeoLocationsFileUrlResponse
     */
    public function setFileUrl($FileUrl)
    {
        $this->FileUrl = $FileUrl;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFileUrlExpiryTimeUtc()
    {
        if (null === $this->FileUrlExpiryTimeUtc) {
            return $this->FileUrlExpiryTimeUtc;
        }
        try {
            return new \DateTime($this->FileUrlExpiryTimeUtc);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $FileUrlExpiryTimeUtc
     * @return \PMG\BingAds\CampaignManagement\GetGeoLocationsFileUrlResponse
     */
    public function setFileUrlExpiryTimeUtc(\DateTime $FileUrlExpiryTimeUtc)
    {
        $this->FileUrlExpiryTimeUtc = $FileUrlExpiryTimeUtc->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedTimeUtc()
    {
        if (null === $this->LastModifiedTimeUtc) {
            return $this->LastModifiedTimeUtc;
        }
        try {
            return new \DateTime($this->LastModifiedTimeUtc);
        } catch(\Exception $e) {
            return null;
        }
    }

    /**
     * @param \DateTime $LastModifiedTimeUtc
     * @return \PMG\BingAds\CampaignManagement\GetGeoLocationsFileUrlResponse
     */
    public function setLastModifiedTimeUtc(\DateTime $LastModifiedTimeUtc)
    {
        $this->LastModifiedTimeUtc = $LastModifiedTimeUtc->format(\DateTime::ATOM);
        return $this;
    }

}
