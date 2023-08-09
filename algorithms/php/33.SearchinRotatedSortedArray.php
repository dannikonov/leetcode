<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $l = 0;
        $r = count($nums) - 1;

        while ($l <= $r) {
            $m = $l + intdiv($r - $l, 2);

            if ($nums[$m] === $target) {
                return $m;
            } else {
                if ($nums[$l] <= $nums[$m]) { // left part is sorted
                    if ($nums[$l] <= $target && $target < $nums[$m]) {
                        $r = $m - 1;
                    } else {
                        $l = $m + 1;
                    }
                } else {
                    if ($nums[$m] <= $nums[$r]) { // right part is sorted
                        if ($nums[$m] < $target && $target <= $nums[$r]) {
                            $l = $m + 1;
                        } else {
                            $r = $m - 1;
                        }
                    }
                }
            }
        }

        return -1;
    }
}