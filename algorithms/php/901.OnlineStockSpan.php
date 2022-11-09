<?php

class StockSpanner
{
    /**
     */
    function __construct()
    {
        $this->stack = new SplStack();
    }

    /**
     * @param  Integer  $price
     * @return Integer
     */
    function next($price)
    {
        $tmp = 1;
        while (!$this->stack->isEmpty() && $this->stack->top()[0] <= $price) {
            $tmp += $this->stack->pop()[1];
        }

        $this->stack->push([$price, $tmp]);

        return $tmp;
    }
}

/**
 * Your StockSpanner object will be instantiated and called as such:
 * $obj = StockSpanner();
 * $ret_1 = $obj->next($price);
 */