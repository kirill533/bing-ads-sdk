<?php

namespace PMG\BingAds\Bulk;

class ArrayOfCampaignScope implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignScope[] $CampaignScope
     */
    protected $CampaignScope = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignScope[]
     */
    public function getCampaignScope()
    {
      return $this->CampaignScope;
    }

    /**
     * @param CampaignScope[] $CampaignScope
     * @return \PMG\BingAds\Bulk\ArrayOfCampaignScope
     */
    public function setCampaignScope(array $CampaignScope = null)
    {
      $this->CampaignScope = $CampaignScope;
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
      return isset($this->CampaignScope[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignScope
     */
    public function offsetGet($offset)
    {
      return $this->CampaignScope[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignScope $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignScope[] = $value;
      } else {
        $this->CampaignScope[$offset] = $value;
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
      unset($this->CampaignScope[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignScope Return the current element
     */
    public function current()
    {
      return current($this->CampaignScope);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignScope);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignScope);
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
      reset($this->CampaignScope);
    }

    /**
     * Countable implementation
     *
     * @return CampaignScope Return count of elements
     */
    public function count()
    {
      return count($this->CampaignScope);
    }

}
