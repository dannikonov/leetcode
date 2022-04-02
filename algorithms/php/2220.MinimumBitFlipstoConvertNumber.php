<?php

class Solution
{

    /**
     * @param Integer $start
     * @param Integer $goal
     * @return Integer
     */
    function minBitFlips($start, $goal)
    {
        return array_sum(str_split(decbin($start ^ $goal)));
    }
}