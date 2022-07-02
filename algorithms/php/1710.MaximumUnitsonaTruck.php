<?php

class Solution
{

    /**
     * @param  Integer[][]  $boxTypes
     * @param  Integer  $truckSize
     * @return Integer
     */
    function maximumUnits($boxTypes, $truckSize)
    {
        usort($boxTypes, function ($a, $b) {
            return $a[1] < $b[1];
        });

        $boxes = 0;

        foreach ($boxTypes as $box) {
            $tmp = min($truckSize, $box[0]);
            $boxes += $tmp * $box[1];
            $truckSize -= $tmp;

            if ($truckSize <= 0) {
                return $boxes;
            }
        }

        return $boxes;
    }
}