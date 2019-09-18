<?php

namespace PMG\BingAds\CustomerBilling;

class ArrayOfBillingDocumentInfo implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BillingDocumentInfo[] $BillingDocumentInfo
     */
    protected $BillingDocumentInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BillingDocumentInfo[]
     */
    public function getBillingDocumentInfo()
    {
        return $this->BillingDocumentInfo;
    }

    /**
     * @param BillingDocumentInfo[] $BillingDocumentInfo
     * @return \PMG\BingAds\CustomerBilling\ArrayOfBillingDocumentInfo
     */
    public function setBillingDocumentInfo(array $BillingDocumentInfo = null)
    {
        $this->BillingDocumentInfo = $BillingDocumentInfo;
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
      return isset($this->BillingDocumentInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BillingDocumentInfo
     */
    public function offsetGet($offset)
    {
      return $this->BillingDocumentInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BillingDocumentInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BillingDocumentInfo[] = $value;
      } else {
        $this->BillingDocumentInfo[$offset] = $value;
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
      unset($this->BillingDocumentInfo[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BillingDocumentInfo[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BillingDocumentInfo ?? []);
    }

    /**
     * Countable implementation
     *
     * @return BillingDocumentInfo Return count of elements
     */
    public function count()
    {
        return is_array($this->BillingDocumentInfo) ? count($this->BillingDocumentInfo) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return BillingDocumentInfo[]|null The previous array if present
     */
    public function exchangeArray(array $BillingDocumentInfo)
    {
        $prev = $this->BillingDocumentInfo;
        $this->BillingDocumentInfo = $BillingDocumentInfo;
        return $prev;
    }

}
