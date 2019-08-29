<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfExperiment implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Experiment[] $Experiment
     */
    protected $Experiment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Experiment[]
     */
    public function getExperiment()
    {
      return $this->Experiment;
    }

    /**
     * @param Experiment[] $Experiment
     * @return \PMG\BingAds\CampaignManagement\ArrayOfExperiment
     */
    public function setExperiment(array $Experiment = null)
    {
      $this->Experiment = $Experiment;
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
      return isset($this->Experiment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Experiment
     */
    public function offsetGet($offset)
    {
      return $this->Experiment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Experiment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Experiment[] = $value;
      } else {
        $this->Experiment[$offset] = $value;
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
      unset($this->Experiment[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Experiment[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Experiment);
    }

    /**
     * Countable implementation
     *
     * @return Experiment Return count of elements
     */
    public function count()
    {
      return count($this->Experiment);
    }

    /**
     * Change the current array with another
     *
     * @return Experiment[]|null The previous array if present
     */
    public function exchangeArray(array $Experiment)
    {
        $prev = $this->Experiment;
        $this->Experiment = $Experiment;
        return $prev;
    }

}
