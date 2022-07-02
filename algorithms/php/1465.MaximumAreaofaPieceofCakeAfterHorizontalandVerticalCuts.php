<?php

class Solution
{

    /**
     * @param  Integer  $h
     * @param  Integer  $w
     * @param  Integer[]  $horizontalCuts
     * @param  Integer[]  $verticalCuts
     * @return Integer
     */
    function maxArea($h, $w, $horizontalCuts, $verticalCuts)
    {
        sort($horizontalCuts);
        sort($verticalCuts);

        $horizontalCuts[] = $h;
        $verticalCuts[] = $w;

        $prev = 0;
        $maxH = 0;
        foreach ($horizontalCuts as $cut) {
            $maxH = max($maxH, $cut - $prev);
            $prev = $cut;
        }

        $prev = 0;
        $maxV = 0;
        foreach ($verticalCuts as $cut) {
            $maxV = max($maxV, $cut - $prev);
            $prev = $cut;
        }

        return $maxH * $maxV % 1000000007;
    }
}

// 6