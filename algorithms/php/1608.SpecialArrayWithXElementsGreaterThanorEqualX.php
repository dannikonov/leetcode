<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function specialArray($nums)
    {
        sort($nums);

        if (count($nums) < $nums[0]) {
            return count($nums);
        }

        $l = 0;
        $r = count($nums) - 1;

        while ($l <= $r) {
            $m = $l + (($r - $l) >> 1);
            $x = count($nums) - $m;

            if ($nums[$m] >= $x) {
                if ($nums[$m - 1] < $x) {
                    return $x;
                }
                $r = $m - 1;
            } else {
                $l = $m + 1;
            }
        }

        return -1;
    }
}