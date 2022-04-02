<?php

/**
 * The API guess is defined in the parent class.
 * @param num   your guess
 * @return         -1 if num is higher than the picked number
 *                  1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function guessNumber($n)
    {
        $l = 1;
        $r = $n;

        while ($l <= $r) {
            $m = intval(($l + $r) / 2);

            if ($this->guess($m) === 0) {
                return $m;
            }

            if ($this->guess($m) === -1) {
                $r = $m - 1;
            }

            if ($this->guess($m) === 1) {
                $l = $m + 1;
            }
        }
    }
}