<?php

namespace PMG\BingAds\Reporting;

class ArrayOfCampaignReportScope implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return CampaignReportScope Return the current element
     */
    public function current()
    {
      return current($this->CampaignReportScope);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignReportScope);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignReportScope);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->CampaignReportScope);
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

}
