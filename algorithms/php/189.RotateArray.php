<?php

class Solution
{

    /**
     * @param  Integer[]  $nums
     * @param  Integer  $k
     * @return NULL
     */
    function rotate(&$nums, $k)
    {
        $n = count($nums);
        $k = $k % $n;

        $nums = array_reverse($nums);

        $nums = [
            ...array_reverse(array_slice($nums, 0, $k)),
            ...array_reverse(array_slice($nums, $k, $n))
        ];
    }
}