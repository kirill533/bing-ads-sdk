<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfCompetitionLevel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CompetitionLevel[] $CompetitionLevel
     */
    protected $CompetitionLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompetitionLevel[]
     */
    public function getCompetitionLevel()
    {
      return $this->CompetitionLevel;
    }

    /**
     * @param CompetitionLevel[] $CompetitionLevel
     * @return \PMG\BingAds\AdInsight\ArrayOfCompetitionLevel
     */
    public function setCompetitionLevel(array $CompetitionLevel = null)
    {
      $this->CompetitionLevel = $CompetitionLevel;
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
      return isset($this->CompetitionLevel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompetitionLevel
     */
    public function offsetGet($offset)
    {
      return $this->CompetitionLevel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompetitionLevel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CompetitionLevel[] = $value;
      } else {
        $this->CompetitionLevel[$offset] = $value;
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
      unset($this->CompetitionLevel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CompetitionLevel Return the current element
     */
    public function current()
    {
      return current($this->CompetitionLevel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CompetitionLevel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CompetitionLevel);
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
      reset($this->CompetitionLevel);
    }

    /**
     * Countable implementation
     *
     * @return CompetitionLevel Return count of elements
     */
    public function count()
    {
      return count($this->CompetitionLevel);
    }

}
