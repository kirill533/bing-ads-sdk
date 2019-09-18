<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductNegativeKeywordConflictReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ProductNegativeKeywordConflictReportColumn[] $ProductNegativeKeywordConflictReportColumn
     */
    protected $ProductNegativeKeywordConflictReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductNegativeKeywordConflictReportColumn[]
     */
    public function getProductNegativeKeywordConflictReportColumn()
    {
        return $this->ProductNegativeKeywordConflictReportColumn;
    }

    /**
     * @param ProductNegativeKeywordConflictReportColumn[] $ProductNegativeKeywordConflictReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfProductNegativeKeywordConflictReportColumn
     */
    public function setProductNegativeKeywordConflictReportColumn(array $ProductNegativeKeywordConflictReportColumn = null)
    {
        $this->ProductNegativeKeywordConflictReportColumn = $ProductNegativeKeywordConflictReportColumn;
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
      return isset($this->ProductNegativeKeywordConflictReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductNegativeKeywordConflictReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ProductNegativeKeywordConflictReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductNegativeKeywordConflictReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductNegativeKeywordConflictReportColumn[] = $value;
      } else {
        $this->ProductNegativeKeywordConflictReportColumn[$offset] = $value;
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
      unset($this->ProductNegativeKeywordConflictReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ProductNegativeKeywordConflictReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProductNegativeKeywordConflictReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ProductNegativeKeywordConflictReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->ProductNegativeKeywordConflictReportColumn) ? count($this->ProductNegativeKeywordConflictReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ProductNegativeKeywordConflictReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ProductNegativeKeywordConflictReportColumn)
    {
        $prev = $this->ProductNegativeKeywordConflictReportColumn;
        $this->ProductNegativeKeywordConflictReportColumn = $ProductNegativeKeywordConflictReportColumn;
        return $prev;
    }

}
