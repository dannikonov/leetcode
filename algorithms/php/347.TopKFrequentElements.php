<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $map = array_count_values($nums);

        arsort($map);

        return array_slice(array_keys($map), 0, $k);
    }
}