<?php

class Solution {

    /**
     * @param String $text
     * @return Integer
     */
    function maxNumberOfBalloons($text) {
        $arr = str_split($text);
        $chars = [];
        foreach($arr as $char) {
            $chars[$char]++;
        }

        $balloons = PHP_INT_MAX;
        $balloons = min($chars['b'], $balloons);
        $balloons = min($chars['a'], $balloons);
        $balloons = min(intval($chars['l'] / 2), $balloons);
        $balloons = min(intval($chars['o'] / 2), $balloons);
        $balloons = min($chars['n'], $balloons);

        if (!$balloons) {
            $balloons = 0;
        }

        return $balloons;
    }
}