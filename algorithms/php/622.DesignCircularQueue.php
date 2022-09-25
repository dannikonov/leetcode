<?php

class MyCircularQueue
{
    private $max = 0;
    private $size = 0;
    private $queue = [];
    private $head = 0;

    /**
     * @param  Integer  $k
     */
    function __construct($k)
    {
        $this->max = $k;
    }

    /**
     * @param  Integer  $value
     * @return Boolean
     */
    function enQueue($value)
    {
        if ($this->isFull()) {
            return false;
        }

        $this->queue[($this->head + $this->size) % $this->max] = $value;
        $this->size++;

        return true;
    }

    /**
     * @return Boolean
     */
    function deQueue()
    {
        if ($this->isEmpty()) {
            return false;
        }

        $this->head = ($this->head + 1) % $this->max;
        $this->size--;

        return true;
    }

    /**
     * @return Integer
     */
    function Front()
    {
        if ($this->isEmpty()) {
            return -1;
        }

        return $this->queue[$this->head];
    }

    /**
     * @return Integer
     */
    function Rear()
    {
        if ($this->isEmpty()) {
            return -1;
        }

        return $this->queue[($this->head + $this->size - 1) % $this->max];
    }

    /**
     * @return Boolean
     */
    function isEmpty()
    {
        return !$this->size;
    }

    /**
     * @return Boolean
     */
    function isFull()
    {
        return $this->size === $this->max;
    }
}

/**
 * Your MyCircularQueue object will be instantiated and called as such:
 * $obj = MyCircularQueue($k);
 * $ret_1 = $obj->enQueue($value);
 * $ret_2 = $obj->deQueue();
 * $ret_3 = $obj->Front();
 * $ret_4 = $obj->Rear();
 * $ret_5 = $obj->isEmpty();
 * $ret_6 = $obj->isFull();
 */