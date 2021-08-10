<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minFlipsMonoIncr($s) {
        $flips = 0;
        $ones = 0;
        foreach (str_split($s) as $char) {
            if ($char === '1') {
                $ones += 1;
            } else {
                $flips += 1;
            }

            $flips = min($flips, $ones);
        }

        return $flips;
    }
}