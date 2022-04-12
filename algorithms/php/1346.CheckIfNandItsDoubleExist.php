<?php

class Solution
{

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr)
    {
        sort($arr);

        $check = function ($value) use ($arr) {
            $l = 0;
            $r = count($arr) - 1;

            while ($l <= $r) {
                $m = $l + (($r - $l) >> 1);

                if ($arr[$m] === $value) {
                    return true;
                }

                if ($arr[$m] < $value) {
                    $l = $m + 1;
                } else {
                    $r = $m - 1;
                }
            }

            return false;
        };

        $zeros = 0;
        foreach ($arr as $value) {
            if ($value) {
                if ($check($value * 2)) {
                    return true;
                }
            } else {
                $zeros++;
            }
        }

        return $zeros >= 2;
    }
}