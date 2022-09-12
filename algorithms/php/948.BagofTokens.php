<?php

class Solution
{

    /**
     * @param  Integer[]  $tokens
     * @param  Integer  $power
     * @return Integer
     */
    function bagOfTokensScore($tokens, $power)
    {
        $score = 0;

        sort($tokens);

        $l = 0;
        $r = count($tokens) - 1;
        while ($l <= $r) {
            if ($tokens[$l] <= $power) {
                $power -= $tokens[$l];
                $l++;
                $score++;
            } else {
                if ($score > 0 && $l < $r) {
                    $power += $tokens[$r];
                    $r--;
                    $score--;
                } else {
                    return $score;
                }
            }
        }

        return $score;
    }
}