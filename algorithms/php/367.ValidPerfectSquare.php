<?php

class Solution
{

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num)
    {
        $l = 1;
        $r = $num;

        while ($l <= $r) {
            $m = $l + (intdiv($r - $l, 2));

            $tmp = $num / $m;
            if ($tmp === $m) {
                return true;
            }

            if ($tmp > $m) {
                $l = $m + 1;
            }

            if ($tmp < $m) {
                $r = $m - 1;
            }
        }

        return false;
    }
}