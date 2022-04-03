<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $l = 0;
        $r = count($nums) - 1;

        while ($l <= $r) {
            $m = intdiv($l + $r, 2);

            if ($target === $nums[$m]) {
                return $m;
            }

            if ($target < $nums[$m]) {
                $r = $m - 1;
            }

            if ($target > $nums[$m]) {
                $l = $m + 1;
            }
        }

        return $l;
    }
}