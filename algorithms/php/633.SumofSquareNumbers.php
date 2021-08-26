<?php

class Solution {

    /**
     * @param Integer $c
     * @return Boolean
     */
    function judgeSquareSum($c) {
        for ($a = 0; $a <= sqrt($c); $a++) {
            $b = sqrt($c - pow($a, 2));
            if ($b == intval($b)) {
                return true;
            }
        }

        return false;
    }
}