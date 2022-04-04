<?php

class Solution
{

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @param Integer $d
     * @return Integer
     */
    function findTheDistanceValue($arr1, $arr2, $d)
    {
        sort($arr2);

        $isValid = function ($num) use ($arr2, $d) {
            $l = 0;
            $r = count($arr2) - 1;

            while ($l <= $r) {
                $m = $l + intdiv($r - $l, 2);
                if (abs($arr2[$m] - $num) <= $d) {
                    return false;
                }

                if ($arr2[$m] < $num) {
                    $l = $m + 1;
                } else {
                    $r = $m - 1;
                }
            }

            return true;
        };


        $cnt = 0;
        foreach ($arr1 as $num) {
            if ($isValid($num)) {
                $cnt++;
            }
        }

        return $cnt;
    }
}