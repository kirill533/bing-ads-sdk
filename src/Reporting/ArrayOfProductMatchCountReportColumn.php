<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductMatchCountReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductMatchCountReportColumn[] $ProductMatchCountReportColumn
     */
    protected $ProductMatchCountReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductMatchCountReportColumn[]
     */
    public function getProductMatchCountReportColumn()
    {
      return $this->ProductMatchCountReportColumn;
    }

    /**
     * @param ProductMatchCountReportColumn[] $ProductMatchCountReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfProductMatchCountReportColumn
     */
    public function setProductMatchCountReportColumn(array $ProductMatchCountReportColumn = null)
    {
      $this->ProductMatchCountReportColumn = $ProductMatchCountReportColumn;
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
      return isset($this->ProductMatchCountReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductMatchCountReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ProductMatchCountReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductMatchCountReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductMatchCountReportColumn[] = $value;
      } else {
        $this->ProductMatchCountReportColumn[$offset] = $value;
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
      unset($this->ProductMatchCountReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductMatchCountReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ProductMatchCountReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductMatchCountReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductMatchCountReportColumn);
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
      reset($this->ProductMatchCountReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ProductMatchCountReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ProductMatchCountReportColumn);
    }

}
