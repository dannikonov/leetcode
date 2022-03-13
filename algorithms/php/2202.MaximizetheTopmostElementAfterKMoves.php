<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maximumTop($nums, $k)
    {
        if ($k === 0) {
            return $nums[0];
        }

        if (count($nums) == 1) {
            return ($k % 2) ? -1 : $nums[0];
        }

        if (count($nums) < $k) {
            return max($nums);
        }

        if (count($nums) === $k) {
            return max(array_slice($nums, 0, count($nums) - 1));
        }

        if (count($nums) > $k) {
            return max(
                ($k === 1) ? $nums[1] : max(array_slice($nums, 0, $k - 1)),
                $nums[$k]
            );
        }
    }
}