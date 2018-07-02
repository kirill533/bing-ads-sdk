<?php

namespace PMG\BingAds\CustomerBilling;

class ArrayOfBillingDocumentInfo implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return BillingDocumentInfo Return the current element
     */
    public function current()
    {
      return current($this->BillingDocumentInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BillingDocumentInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BillingDocumentInfo);
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
      reset($this->BillingDocumentInfo);
    }

    /**
     * Countable implementation
     *
     * @return BillingDocumentInfo Return count of elements
     */
    public function count()
    {
      return count($this->BillingDocumentInfo);
    }

}
