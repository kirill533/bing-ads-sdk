<?php

namespace PMG\BingAds\Bulk;

class ArrayOfCampaignScope implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return CampaignScope[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignScope);
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

    /**
     * Change the current array with another
     *
     * @return CampaignScope[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignScope)
    {
        $prev = $this->CampaignScope;
        $this->CampaignScope = $CampaignScope;
        return $prev;
    }

}
