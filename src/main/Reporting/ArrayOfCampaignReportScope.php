<?php

namespace PMG\BingAds\Reporting;

class ArrayOfCampaignReportScope implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CampaignReportScope[] $CampaignReportScope
     */
    protected $CampaignReportScope = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignReportScope[]
     */
    public function getCampaignReportScope()
    {
      return $this->CampaignReportScope;
    }

    /**
     * @param CampaignReportScope[] $CampaignReportScope
     * @return \PMG\BingAds\Reporting\ArrayOfCampaignReportScope
     */
    public function setCampaignReportScope(array $CampaignReportScope = null)
    {
      $this->CampaignReportScope = $CampaignReportScope;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->CampaignReportScope[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignReportScope
     */
    public function offsetGet($offset)
    {
      return $this->CampaignReportScope[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignReportScope $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignReportScope[] = $value;
      } else {
        $this->CampaignReportScope[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CampaignReportScope[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CampaignReportScope[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignReportScope);
    }

    /**
     * Countable implementation
     *
     * @return CampaignReportScope Return count of elements
     */
    public function count()
    {
      return count($this->CampaignReportScope);
    }

    /**
     * Change the current array with another
     *
     * @return CampaignReportScope[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignReportScope)
    {
        $prev = $this->CampaignReportScope;
        $this->CampaignReportScope = $CampaignReportScope;
        return $prev;
    }

}
