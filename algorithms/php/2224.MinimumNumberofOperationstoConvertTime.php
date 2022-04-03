<?php

class Solution
{

    /**
     * @param String $current
     * @param String $correct
     * @return Integer
     */
    function convertTime($current, $correct)
    {
        $contertToMins = function ($time) {
            $parts = explode(":", $time);
            return $parts[0] * 60 + $parts[1];
        };

        $current = $contertToMins($current);
        $correct = $contertToMins($correct);

        if ($current > $correct) {
            $current -= 24 * 60;
        }

        $cnt = 0;
        if ($correct - $current >= 60) {
            $m = intval(($correct - $current) / 60);
            $cnt += $m;
            $correct -= $m * 60;
        }

        if ($correct - $current >= 15) {
            $m = intval(($correct - $current) / 15);
            $cnt += $m;
            $correct -= $m * 15;
        }

        if ($correct - $current >= 5) {
            $m = intval(($correct - $current) / 5);
            $cnt += $m;
            $correct -= $m * 5;
        }

        $cnt += $correct - $current;

        return $cnt;
    }
}