<?php

class Solution
{

    /**
     * @param Integer[] $people
     * @param Integer $limit
     * @return Integer
     */
    function numRescueBoats($people, $limit)
    {
        sort($people);

        $l = 0;
        $r = count($people) - 1;
        $boats = 0;

        while ($l <= $r) {
            if ($people[$l] + $people[$r] <= $limit) {
                $l++;
                $r--;
            } else {
                $r--;
            }


            $boats++;
        }

        return $boats;
    }
}