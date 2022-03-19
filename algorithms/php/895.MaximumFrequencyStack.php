<?php

class FreqStack
{
    /**
     */
    private $maxFreq = 0;
    private $freq = [];
    private $stacks = [];

    function __construct()
    {
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val)
    {
        if (!isset($this->freq[$val])) {
            $this->freq[$val] = 0;
        }
        $this->freq[$val]++;

        if ($this->freq[$val] > $this->maxFreq) {
            $this->maxFreq = $this->freq[$val];
        }

        if (!isset($this->stacks[$this->freq[$val]])) {
            $this->stacks[$this->freq[$val]] = new SplStack();
        }
        $this->stacks[$this->freq[$val]]->push($val);
    }

    /**
     * @return Integer
     */
    function pop()
    {
        $top = $this->stacks[$this->maxFreq]->pop();
        $this->freq[$top]--;

        if ($this->stacks[$this->maxFreq]->isEmpty()) {
            unset($this->stacks[$this->maxFreq]);
            $this->maxFreq--;
        }

        return $top;
    }
}

/**
 * Your FreqStack object will be instantiated and called as such:
 * $obj = FreqStack();
 * $obj->push($val);
 * $ret_2 = $obj->pop();
 */