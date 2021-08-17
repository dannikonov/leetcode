<?php

class NumArray
{
    private $nums = [];

    /**
     * @param Integer[] $nums
     */
    function __construct($nums)
    {
        $this->nums = $nums;
    }

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function sumRange($left, $right)
    {
        return array_reduce(
            array_slice($this->nums, $left, $right - $left + 1),
            function ($acc, $item) {
                $acc += $item;
                return $acc;
            },
            0
        );
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($left, $right);
 */