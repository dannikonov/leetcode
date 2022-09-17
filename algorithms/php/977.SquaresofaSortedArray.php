<?php

class Solution
{

    /**
     * @param  Integer[]  $nums
     * @return Integer[]
     */
    function sortedSquares($nums)
    {
        $nums = array_map(function ($item) {
            return pow($item, 2);
        }, $nums);

        sort($nums);

        return $nums;
    }
}