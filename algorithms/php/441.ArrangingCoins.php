<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n)
    {
        $l = 1;
        $r = $n;

        while ($l <= $r) {
            $m = $l + intdiv($r - $l, 2);
            $coins = $m * ($m + 1) / 2;

            if ($coins === $n) {
                return $m;
            }

            if ($coins < $n) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }

        return $r;
    }
}