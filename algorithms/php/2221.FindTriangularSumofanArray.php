<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function triangularSum($nums)
    {
        if (count($nums) === 1) {
            return $nums[0];
        }
        $tmp = [];

        for ($i = 0; $i < count($nums) - 1; $i++) {
            $tmp[$i] = ($nums[$i] + $nums[$i + 1]) % 10;
        }

        return $this->triangularSum($tmp);
    }
}