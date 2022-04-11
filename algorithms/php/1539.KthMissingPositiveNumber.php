<?php

class Solution
{

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer
     */
    function findKthPositive($arr, $k)
    {
        if ($arr[0] > $k) {
            return $k;
        }

        $l = 0;
        $r = count($arr) - 1;

        while ($l <= $r) {
            $m = $l + (($r - $l) >> 1);

            if ($arr[$m] - $m - 1 < $k) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }

        return $l + $k;
    }
}