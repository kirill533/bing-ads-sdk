<?php

namespace PMG\BingAds\Reporting;

class ArrayOfBudgetSummaryReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BudgetSummaryReportColumn[] $BudgetSummaryReportColumn
     */
    protected $BudgetSummaryReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BudgetSummaryReportColumn[]
     */
    public function getBudgetSummaryReportColumn()
    {
      return $this->BudgetSummaryReportColumn;
    }

    /**
     * @param BudgetSummaryReportColumn[] $BudgetSummaryReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfBudgetSummaryReportColumn
     */
    public function setBudgetSummaryReportColumn(array $BudgetSummaryReportColumn = null)
    {
      $this->BudgetSummaryReportColumn = $BudgetSummaryReportColumn;
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
      return isset($this->BudgetSummaryReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BudgetSummaryReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->BudgetSummaryReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BudgetSummaryReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BudgetSummaryReportColumn[] = $value;
      } else {
        $this->BudgetSummaryReportColumn[$offset] = $value;
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
      unset($this->BudgetSummaryReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BudgetSummaryReportColumn Return the current element
     */
    public function current()
    {
      return current($this->BudgetSummaryReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BudgetSummaryReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BudgetSummaryReportColumn);
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
      reset($this->BudgetSummaryReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return BudgetSummaryReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->BudgetSummaryReportColumn);
    }

}
