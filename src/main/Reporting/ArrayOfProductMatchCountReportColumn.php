<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductMatchCountReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return ProductMatchCountReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProductMatchCountReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return ProductMatchCountReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ProductMatchCountReportColumn)
    {
        $prev = $this->ProductMatchCountReportColumn;
        $this->ProductMatchCountReportColumn = $ProductMatchCountReportColumn;
        return $prev;
    }

}
