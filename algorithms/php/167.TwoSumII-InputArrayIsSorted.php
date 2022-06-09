<?php

class Solution
{

    /**
     * @param  Integer[]  $numbers
     * @param  Integer  $target
     * @return Integer[]
     */
    function twoSum($numbers, $target)
    {
        $l = 0;
        $r = count($numbers) - 1;

        while ($numbers[$l] + $numbers[$r] !== $target) {
            if ($numbers[$l] + $numbers[$r] < $target) {
                $l++;
            } else {
                $r--;
            }
        }

        return [$l + 1, $r + 1];
    }
}