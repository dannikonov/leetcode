<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Boolean
     */
    function search($nums, $target)
    {
        $l = 0;
        $r = count($nums) - 1;

        while ($l <= $r) {
            $m = intval(($l + $r) / 2);

            if ($target === $nums[$m]) {
                return true;
            }

            while ($nums[$l] === $nums[$m] && $nums[$m] === $nums[$r] && $r > 0) {
                $l++;
                $r--;
            }

            if ($nums[$l] <= $nums[$m]) {
                if ($nums[$l] <= $target && $target < $nums[$m]) {
                    $r = $m - 1;
                } else {
                    $l = $m + 1;
                }
            } else {
                if ($nums[$m] < $target && $target <= $nums[$r]) {
                    $l = $m + 1;
                } else {
                    $r = $m - 1;
                }
            }
        }
        return false;
    }

}