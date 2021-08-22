<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findGCD($nums)
    {
        $min = min($nums);
        $max = max($nums);

        return $this->gcd($min, $max);
    }

    function gcd($a, $b)
    {
        return $b ? $this->gcd($b, $a % $b) : $a;
    }
}