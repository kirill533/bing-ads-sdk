<?php

namespace PMG\BingAds\CampaignMangagement;

class GetProfileDataFileUrlResponse
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
    public function __construct($FileUrl, \DateTime $FileUrlExpiryTimeUtc, \DateTime $LastModifiedTimeUtc)
    {
      $this->FileUrl = $FileUrl;
      $this->FileUrlExpiryTimeUtc = $FileUrlExpiryTimeUtc->format(\DateTime::ATOM);
      $this->LastModifiedTimeUtc = $LastModifiedTimeUtc->format(\DateTime::ATOM);
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
     * @return \PMG\BingAds\CampaignMangagement\GetProfileDataFileUrlResponse
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
      if ($this->FileUrlExpiryTimeUtc == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FileUrlExpiryTimeUtc);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FileUrlExpiryTimeUtc
     * @return \PMG\BingAds\CampaignMangagement\GetProfileDataFileUrlResponse
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
      if ($this->LastModifiedTimeUtc == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedTimeUtc);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedTimeUtc
     * @return \PMG\BingAds\CampaignMangagement\GetProfileDataFileUrlResponse
     */
    public function setLastModifiedTimeUtc(\DateTime $LastModifiedTimeUtc)
    {
      $this->LastModifiedTimeUtc = $LastModifiedTimeUtc->format(\DateTime::ATOM);
      return $this;
    }

}
