<?php

class Solution
{

    /**
     * @param Integer[] $arr
     *
     * @return Integer[]
     */
    function sortByBits($arr)
    {
        $numberOf1s = function ($v) {
            return array_sum(str_split(decbin($v)));
        };

        $callback = function ($a, $b) use ($numberOf1s) {
            $a1 = $numberOf1s($a);
            $b1 = $numberOf1s($b);

            if ($a1 == $b1) {
                return $a >= $b;
            } else {
                return $a1 >= $b1;
            }
        };

        usort($arr, $callback);

        return $arr;
    }
}