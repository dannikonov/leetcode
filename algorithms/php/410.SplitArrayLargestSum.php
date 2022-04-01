<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $m
     * @return Integer
     */
    function splitArray($nums, $m)
    {
        $separate = function ($nums, $mid, $m) {
            $sum = 0;
            $parts = 1;

            foreach ($nums as $v) {
                if ($v + $sum <= $mid) {
                    $sum += $v;
                } else {
                    $parts++;
                    $sum = $v;
                }
            }

            return $parts <= $m;
        };


        $l = 0;
        $r = 0;
        foreach ($nums as $v) {
            $r += $v;
            $l = max($l, $v);
        }

        while ($l <= $r) {
            $mid = intval(($l + $r) / 2);

            if ($separate($nums, $mid, $m)) {
                $r = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }

        return $l;
    }
}