<?php

class Solution
{

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr)
    {
        $l = 0;
        $r = count($arr) - 1;

        while ($l <= $r) {
            $m = intdiv($l + $r, 2);
            if ($arr[$m - 1] < $arr[$m] && $arr[$m] > $arr[$m + 1]) {
                return $m;
            }

            if ($arr[$m - 1] < $arr[$m]) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }
    }
}